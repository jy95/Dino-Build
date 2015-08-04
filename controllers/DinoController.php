<?php
class DinoController
{

    function __construct()
    {
    }

    public function run()
    {

        $dino = Donnees::getInstance()->getDinoUser($_GET['dino']);
		$elements = array(
		'eau',
		'feu',
		'foudre',
		'air',
		'bois');
        require_once(CHEMIN_VUES . 'dino.php');
    }


}
?>