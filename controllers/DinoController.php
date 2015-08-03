<?php
class DinoController
{

    function __construct()
    {
    }

    public function run()
    {

        $dino = Donnees::getInstance()->getDinoUser($_GET['dino']);
        var_dump($this->tableElement("eau", $dino));

        require_once(CHEMIN_VUES . 'dino.php');
    }


}
?>