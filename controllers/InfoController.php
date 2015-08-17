<?php
class InfoController
{

    function __construct()
    {
    }

    public function run()
    {
        try{

            $competence = Db::getInstance()->select_competence($_GET['element'], $_GET['competence']);
            $element = $_GET['element'];
        }catch (Exception $e){
            // cas d'erreur
            $competence = null;
            $element = "feu";
        }

        if ( $competence instanceof CompetenceSpeciale) {
            $compteur = 1;
            $parents = "";
            $elements = array(
                'eau',
                'feu',
                'foudre',
                'air',
                'bois'
            );

            foreach ($competence->parents() as $i => $nb) {
                if ($nb != 0) {
                    $parents = $parents . "<tr> <td colspan=\"2\"><a href=\"" . PATH_ABSOLUTE . "/info/" . $elements[$i] . "/" . $nb . "\" alt=\"competence\" target=\"compétence\" onclick=\"ouvrir();\">Compétence " . $compteur . "</a></td></tr>";
                    $compteur++;
                }
            }
        }
        require_once(CHEMIN_VUES . 'table/info.php');

    }
}
?>