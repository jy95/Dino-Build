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


        require_once(CHEMIN_VUES . 'table/info.php');

    }
}
?>