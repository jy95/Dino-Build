<?php
class InfoController
{

    function __construct()
    {
    }

    public function run()
    {
        $table = array (
            'feu',
            'bois',
            'air',
            'eau',
            'foudre'
        );

        if (!empty($_GET['element']) && !empty($_GET['competence']) && in_array($_GET['element'], $table)) {
            $competence = Db::getInstance()->select_competence($_GET['element'], $_GET['competence']);
            $element = $_GET['element'];

        } else {
            // cas d'erreur
            $competence = null;
            $element = "feu";
        }


        require_once(CHEMIN_VUES . 'table/info.php');

    }
}
?>