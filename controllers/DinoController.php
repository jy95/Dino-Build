<?php
class DinoController
{

    function __construct()
    {
    }

    public function run()
    {

        $dino = Donnees::getInstance()->getDinoUser($_GET['dino']);
        $invocation = Db::getInstance()->invocation($dino->getRace());
        $parents = "";

		$elements = array(
		'eau',
		'feu',
		'foudre',
		'air',
		'bois');

        $doubles = Db::getInstance()->competencesDoubles();
        $codeCouleur = array();


        foreach($doubles as $test){
            if ($test->aLaCompetenceDisponible($dino) == true){
                $codeCouleur[] = "acquis";
            } elseif ($test->peutAvoirLaCompetence($dino) == true){
                $codeCouleur[] = "encours";
            } else {
                $codeCouleur[] = "nonacquis";
            }
        }


        require_once(CHEMIN_VUES . 'dino.php');
    }


}
?>