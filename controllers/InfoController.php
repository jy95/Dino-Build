<?php
class InfoController
{

    function __construct()
    {
    }

    public function run()
    {
        $array = Db::getInstance()->select_competence($_GET['competence']);
        $competence = $array[0];
        $element = $array[1];

        if (!empty($_SESSION['race'])&& $_SESSION['race'] == 'quetzu') {
        $array = Db::getInstance()->select_competence2($_GET['competence']);
        $competence = $array[0];
        $element = $array[1];
        }

        require_once(CHEMIN_VUES . 'table/info.php');

    }
}
?>