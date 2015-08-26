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

        if (!empty($_POST)){
            if ($_POST['comment']){
                $text = trim(htmlentities($_POST['comment']));
                $id = Donnees::getInstance()->getLastNumberComment();
                $reply = null;

                if ($_POST['reply']) {
                    $reply = $_POST['reply'];
                }

                $comment = new Commentaire($id, $_GET['dino'], $_SESSION['id'], $text, null, $reply);
                var_dump($comment);
                Donnees::getInstance()->publishComment($comment);
            } else {
                $notification = "Pas de message !";
            }
        }

        $commentaires = Donnees::getInstance()->select_commentaires($_GET['dino'], ((!empty ( $_GET ['page'] )) ?  ( $_GET ['page'] ) : '0'));
        require_once(CHEMIN_VUES . 'dino.php');
        require_once(CHEMIN_VUES . 'commentaires.php');
    }

    public function smileyDino($message){
        $codes = array(
            ':drpg:' => '<img src="http://www.dinorpg.com/favicon.ico" alt=":drpg:">',
            ':drpg_gold:' => '<img src="http://www.dinorpg.com/img/forum/smiley/s_gold.gif" alt=":drpg_gold:">',
            ':drpg_map_castle:' => '<img src="http://www.dinorpg.com/img/forum/smiley/map_castle.gif" alt=":drpg_map_castle:">',
            ':drpg_map_cavern:' => '<img src="http://www.dinorpg.com/img/forum/smiley/map_cavern.gif" alt=":drpg_map_cavern:">',


        );

    }


}
?>