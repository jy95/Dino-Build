<?php
class InfoController
{

    function __construct()
    {
    }

    public function run()
    {
        $competence = Db::getInstance()->select_competence($_GET['competence']);
        require_once(CHEMIN_VUES . 'info.php');

    }
}
?>