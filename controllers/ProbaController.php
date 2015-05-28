<?php
class ProbaController{

    function __construct()
    {

    }

    function run()
    {
        if (!empty($_POST)){

            $donnes = $_POST['feu'] + $_POST['bois'] + $_POST['eau'] + $_POST['foudre'] + $_POST['air'];
            $donnesuser = array($_POST['feu'], $_POST['bois'], $_POST['eau'], $_POST['foudre'], $_POST['air']);
            $nombreDeUps = $_POST['niveau2'] - $_POST['niveau1'];

            if ($nombreDeUps <= 0){

                $message = "Désolé ! Une erreur est présente (Règle: niveau actuel < niveau souhaité)";

            } elseif ($donnes > $nombreDeUps){

                $message = "Désolé ! Trop de ups sélectionné pour les niveaux sélectionnés";

            } else {

            $calcul = $this->probabilite($this->tableauProbabilite($_POST['dino']), $donnesuser, $nombreDeUps) * 100;
            $message = 'Vous avez une probabilité de ' . round($calcul, 2) . '% d\'accomplir le plan up voulu';

            }
        }
        require_once(CHEMIN_VUES . 'proba.php');
    }

    public function combinaison($nombredeupsvoulus, $nombretotal) {
        return $this->factoriel($nombretotal)/($this->factoriel($nombredeupsvoulus)*$this->factoriel($nombretotal-$nombredeupsvoulus));
    }

    public function factoriel($nombre){
        if($nombre==0) {
            return 1;
        }else
            return $nombre*$this->factoriel($nombre-1);
    }

    public function probabilite($tableaudeProbabilite, $tableauDesUpMinElements, $nombreDeUpsRestants){
        $N=$nombreDeUpsRestants;//nombre de up restant
        $probaFeu=$tableaudeProbabilite[0];//proba d'up en feu
        $probaBois=$tableaudeProbabilite[1];//proba d'up en bois
        $probaEau=$tableaudeProbabilite[2];//proba d'up en eau
        $probaFoudre=$tableaudeProbabilite[3];//proba d'up en foudre. La proba d'up en air se déduit des autres proba.
        $feu=$tableauDesUpMinElements[0];//nombre de up min désiré en feu
        $bois=$tableauDesUpMinElements[1];//nombre de up min désiré en bois
        $eau=$tableauDesUpMinElements[2];//nombre de up min désiré en eau
        $foudre=$tableauDesUpMinElements[3];//nombre de up min désiré en foudre
        $air=$tableauDesUpMinElements[4];//nombre de up min désiré en air

        $x=$feu;
        $s1=0;
        while($x<=($N-($bois+$eau+$foudre+$air)))
        {
            $y=$bois;
            $s2=0;
            while($y<=($N-($x+$eau+$foudre+$air)))
            {
                $z=$eau;
                $s3=0;
                while($z<=($N-($x+$y+$foudre+$air)))
                {
                    $t=$foudre;
                    $s4=0;
                    while($t<=($N-($x+$y+$z+$air)))
                    {
                        $s4+=$this->combinaison($t,$N-($x+$y+$z))*pow($probaFoudre,$t)*pow(1-($probaFeu+$probaBois+$probaEau+$probaFoudre),$N-($x+$y+$z+$t));
                        $t++;
                    }
                    $s3+=$this->combinaison($z,$N-($x+$y))*pow($probaEau,$z)*$s4;
                    $z++;
                }
                $s2+=$this->combinaison($y,$N-$x)*pow($probaBois,$y)*$s3;
                $y++;
            }
            $s1+=$this->combinaison($x,$N)*pow($probaFeu,$x)*$s2;

            $x++;
        }

        return $s1;
    }

    public static function tableauProbabilite($dino){
        // return array(probaFeu, probaBois, probaEau, probaFoudre)

        switch($dino){
            case 'winks':
                return array(0.05, 0.1, 0.45, 0.3);
            case 'sirain':
                return array(0.15, 0.1, 0.55, 0.1);
            case 'kabuki' :
                return array(0.1, 0.1, 0.3, 0.1);
            case 'wanman' :
                return array(0.15, 0.3, 0.05, 0.4);
            case 'moueffe':
                return array(0.5, 0.2, 0.1, 0.05);
            case 'castivore':
                return array(0.1, 0.4, 0.15, 0.10);
            case 'feross':
                return array(0.3, 0.3, 0.3, 0.05);
            case 'nuagoz':
                return array(0.05, 0.05, 0.3, 0.3);
            case 'planaille':
                return array(0.1, 0.1, 0.1, 0.3);
            case 'pteroz':
                return array(0.4, 0.1, 0.1, 0.15);
            case 'toufufu':
                return array(0.1, 0.3, 0.05, 0.3);
            case 'gorilloz':
                return array(0.15, 0.65, 0.05, 0.1);
            case 'pigmou':
                return array(0.6, 0.15, 0.1, 0.1);
            case 'rocky':
                return array(0.2, 0.1, 0.1, 0.55);
            case 'quetzu':
                return array(0.4, 0.1, 0.4, 0.1);
            default:
                return array(0,0,0,0);
        }
    }
}
?>