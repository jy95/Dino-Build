<?php
class HelperController {
    public function __construct() {
    }
    public function run() {

        if (!empty($_GET['stop']) && $_GET['stop'] == true){
            $_SESSION['dino'] = null;
        }

        $table = array (
            'feu',
            'bois',
            'air',
            'eau',
            'foudre'
        );

        $table2 = array (
            'winks',
            'sirain',
            'kabuki',
            'wanwan',
            'moueffe',
            'castivore',
            'feross',
            'nuagoz',
            'planaille',
            'pteroz',
            'toufufu',
            'gorilloz',
            'pigmou',
            'rocky',
            'quetzu',
            'soufflet',
            'mahamuti',
            'hippoclamp',
            'santaz',
            'smog'
        );

        if (! empty ( $_POST ['race'] ) && in_array ( $_POST ['race'], $table2 )){
            $race = $_POST ['race'];
            $_SESSION ['race'] = $_POST ['race'];
        }

        if (!empty($_SESSION['id']) && !empty($_SESSION['dinoUser'])){

            $dino = Donnees::getInstance()->getDinoUser($_SESSION['dinoUser']);

            if ($dino != null && in_array ( $dino->getRace(), $table2 )){
                $race = $dino->getRace();
                $_SESSION ['race'] = $dino->getRace();
                $_SESSION ['dino'] = $dino->getId();
                $_SESSION['dinoUser'] = null;
            }

        }

        if (! empty ( $_POST ['element'] ) && in_array ( $_POST ['element'], $table )) {
            $element = $_POST ['element'];
            $_SESSION ['element'] = $_POST ['element'];
        }

        if (!empty($element) && !empty($race)){
            $table = Db::getInstance ()->select_toutcompetences ( $_SESSION ['element'],  $_SESSION ['race']);
            if (!empty($_SESSION ['dino'])) {
                $funcname = "get" . ucfirst($_SESSION['element']);
                $competences_Acquises = Donnees::getInstance()->getDinoUser($_SESSION ['dino'])->$funcname();
            }
        } else {
            $table = "";
        }


        if (! empty ( $_POST ['mieux'] )) {
            if (! empty ( $_POST ['competences'] )) {

                sort($_POST ['competences'] ,SORT_NUMERIC);
                $competences = Db::getInstance()->select_competences($_POST ['competences'], $_SESSION ['element']);
                $correct = $this->isValid($competences);

                if ($correct) {
                    if (!empty($_SESSION ['dino'])){
                        $dino = Donnees::getInstance()->getDinoUser($_SESSION ['dino']);
                        $funcname = "set" . ucfirst($_SESSION['element']);
                        $dino->$funcname($_POST ['competences']);
                        Donnees::getInstance()->misAJour($dino);
                        $_SESSION['dino'] = null;
                    }

                    $competencesdispo = Db::getInstance()->select_competencesdispo($_SESSION ['race'], $_SESSION ['element'], $_POST ['competences']);
                    $tableau = array();

                    foreach ($competencesdispo as $element) {
                        $tableau[] = $element->num();
                    }

                    $conseil = Db::getInstance()->conseil($tableau, $_SESSION ['race'], $_SESSION ['element']);
                    if ($conseil != false) {
                        $meilleurUp = Db::getInstance()->meilleurUp($_SESSION ['element'], $conseil);
                    }
                } else {
                    $error = true;
                    $table = Db::getInstance ()->select_toutcompetences ( $_SESSION ['element'],  $_SESSION ['race']);
                }
            } else {
                $competencesdispo = Db::getInstance ()->select_competencesdispo ($_SESSION ['race'], $_SESSION ['element'], NULL );
                $tableau = array();

                foreach($competencesdispo as $element){
                    $tableau[] = $element->num();
                }

                $conseil = Db::getInstance ()->conseil ( $tableau, $_SESSION ['race'], $_SESSION ['element'] );
                if ($conseil != false) {
                    $meilleurUp = Db::getInstance ()->meilleurUp ($_SESSION ['element'], $conseil );
                }
            }

            $compteur = 1;
            $parents = "";
            $elements = array(
                'eau',
                'feu',
                'foudre',
                'air',
                'bois'
            );
            $invocation = Db::getInstance()->invocation($_SESSION ['race']);
            foreach ($invocation->parents() as $i=>$nb){
                if ($nb != 0) {
                    $parents = $parents . "<br> <a href=\"" . PATH_ABSOLUTE . "/info/" . $elements[$i] . "/" . $nb . "\" alt=\"competence\" target=\"compétence\" onclick=\"ouvrir();\">Competence " . $compteur . "</a>";
                    $compteur++;
                }
            }


        }

        $footer = "<img src=\"" . PATH_ABSOLUTE . "/views/images/Etapes/etape";
        if (!empty($competencesdispo)){
            $footer = $footer . "4.png\"";
        } elseif (!empty($table)){
            $footer = $footer . "3.png\"";
        } elseif (!empty($race)) {
            $footer = $footer . "2.png\"";
        } else {
            $footer = $footer . "1.png\"";
        }
        $footer = $footer . " alt=\"Etapes\" class=\"img-responsive\"/>";

        require_once (CHEMIN_VUES . 'helper.php');
    }

    public function isValid($competences){
        $array = array();
        foreach ($competences as $test){
            if ($test->parent() == 0){
                $array[] = $test->num();
            } else {
                if (! in_array($test->parent(), $array)){
                    return false;
                } else{
                    $array[] = $test->num();
                }
            }
        }
        return true;
    }

}

?>