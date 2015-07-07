<?php
class HelperController {
    public function __construct() {
    }
    public function run() {


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

        if (!empty($_SESSION) && !empty($_POST['dinoUser'])){

            $dino = Donnees::getInstance()->getDinoUser($_POST['dinoUser']);

            if ($dino != null && in_array ( $dino->getRace(), $table2 )){
                $race = $dino->getRace();
                $_SESSION ['race'] = $dino->getRace();
                $_SESSION ['dino'] = $dino->getId();
            }

        }

        if (! empty ( $_POST ['choix'] ) && in_array ( $_POST ['choix'], $table )) {
            $choix = $_POST ['choix'];
            $_SESSION ['choix'] = $_POST ['choix'];
        }

        if (!empty($choix) && !empty($race)){
            $table = Db::getInstance ()->select_toutcompetences ( $_SESSION ['choix'],  $_SESSION ['race']);
        } else {
            $table = "";
        }


        if (! empty ( $_POST ['mieux'] )) {
            if (! empty ( $_POST ['competences'] )) {

                sort($_POST ['competences'] ,SORT_NUMERIC);
                $competences = Db::getInstance()->select_competences($_POST ['competences'], $_SESSION ['choix']);
                $correct = $this->isValid($competences);

                if ($correct) {
                    if (!empty($_SESSION ['dino'])){
                        $dino = Donnees::getInstance()->getDinoUser($_SESSION ['dino']);
                        $funcname = "set" . ucfirst($_SESSION['choix']);
                        $dino->$funcname($_POST ['competences']);
                        Donnees::getInstance()->misAJour($dino);
                    }

                    $competencesdispo = Db::getInstance()->select_competencesdispo($_SESSION ['race'], $_SESSION ['choix'], $_POST ['competences']);
                    $tableau = array();

                    foreach ($competencesdispo as $element) {
                        $tableau[] = $element->num();
                    }

                    $conseil = Db::getInstance()->conseil($tableau, $_SESSION ['race'], $_SESSION ['choix']);
                    if ($conseil != false) {
                        $competence = Db::getInstance()->meilleurUp($_SESSION ['choix'], $conseil);
                    }
                } else {
                    $error = true;
                    $table = Db::getInstance ()->select_toutcompetences ( $_SESSION ['choix'],  $_SESSION ['race']);
                }
            } else {

                $competencesdispo = Db::getInstance ()->select_competencesdispo ($_SESSION ['race'], $_SESSION ['choix'], NULL );
                $tableau = array();

                foreach($competencesdispo as $element){
                    $tableau[] = $element->num();
                }

                $conseil = Db::getInstance ()->conseil ( $tableau, $_SESSION ['race'], $_SESSION ['choix'] );
                if ($conseil != false) {
                    $competence = Db::getInstance ()->meilleurUp ($_SESSION ['choix'], $conseil );
                }
            }
        }

        $footer = "<img src=\"views/images/Etapes/etape";

        if (!empty($competencesdispo)){
            $footer = $footer . "4.png\"";
        } elseif (!empty($table)){
            $footer = $footer . "3.png\"";
        } elseif (!empty($race)) {
            $footer = $footer . "2.png\"";
        } else {
            $footer = $footer . "1.png\"";
        }

        $footer = $footer . " alt=\"Etapes\" style=\"width:100%;height:100%;\"/>";

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