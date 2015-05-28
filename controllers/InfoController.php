<?php
class InfoController
{

    function __construct()
    {
    }

    public function run()
    {
        $competence = Db::getInstance()->select_competence($_GET['competence']);

        if (!empty($_SESSION['race'])&& $_SESSION['race'] == 'quetzu') {
        $competence = Db::getInstance()->select_competence2($_GET['competence']);
        }

        require_once(CHEMIN_VUES . 'table/info.php');

    }
}
?>