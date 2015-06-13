<?php

class ProbaController
{

    function __construct ()
    {}

    function run ()
    {
        if (! empty($_POST)) {
            $donnes = $_POST['feu'] + $_POST['bois'] + $_POST['eau'] +
                     $_POST['foudre'] + $_POST['air'];
            $donnesuser = array(
                    $_POST['feu'],
                    $_POST['bois'],
                    $_POST['eau'],
                    $_POST['foudre'],
                    $_POST['air']
            );
            $nombreDeUps = $_POST['niveau2'] - $_POST['niveau1'];
            
            if ($nombreDeUps <= 0) {
                
                $message = "Désolé ! Une erreur est présente (Règle: niveau actuel < niveau souhaité)";
            } elseif ($donnes > $nombreDeUps) {
                
                $message = "Désolé ! Trop de ups sélectionné pour les niveaux sélectionnés";
            } else {
                $tableauDesProbabilites = $this->tableauProbabilite(
                        $_POST['dino']);
                $probaAvantPDC = "Votre dino de race " . $_POST['dino'] .
                         " a les probabilités de ups suivantes <br> \n
                        Probabilité en feu : " .
                         $tableauDesProbabilites[0] * 100 .
                         "%     
                        Probabilité en bois : " .
                         $tableauDesProbabilites[1] * 100 .
                         "%     
                        Probabilité en eau : " .
                         $tableauDesProbabilites[2] * 100 .
                         "%                  
                        Probabilité en foudre : " .
                         $tableauDesProbabilites[3] * 100 .
                         "%    
                        Probabilité en air : " .
                         (1 - $tableauDesProbabilites[0] -
                         $tableauDesProbabilites[1] - $tableauDesProbabilites[2] -
                         $tableauDesProbabilites[3]) * 100 . "%          
                        ";
                if (! empty($_POST['PDC']) && $_POST['PDC'] != "default") {
                    $tableauDesProbabilites = $this->planDeCarriere(
                            $tableauDesProbabilites, $_POST['PDC']);
                    $probaApresPDC = "Avec Plan de Carrière, Votre dino de race " .
                             $_POST['dino'] .
                             " a les probabilités de ups suivantes <br> \n
                        Probabilité en feu : " .
                             $tableauDesProbabilites[0] * 100 .
                             "%
                        Probabilité en bois : " .
                             $tableauDesProbabilites[1] * 100 .
                             "%
                        Probabilité en eau : " .
                             $tableauDesProbabilites[2] * 100 .
                             "%
                        Probabilité en foudre : " .
                             $tableauDesProbabilites[3] * 100 .
                             "%
                        Probabilité en air : " .
                             (1 - $tableauDesProbabilites[0] -
                             $tableauDesProbabilites[1] -
                             $tableauDesProbabilites[2] -
                             $tableauDesProbabilites[3]) * 100 . "%
                        ";
                }
                
                $calcul = $this->probabilite($tableauDesProbabilites, 
                        $donnesuser, $nombreDeUps) * 100;
                $message = 'Vous avez une probabilité de ' . round($calcul, 2) .
                         '% d\'accomplir le plan up voulu';
            }
        }
        require_once (CHEMIN_VUES . 'proba.php');
    }

    public function combinaison ($nombredeupsvoulus, $nombretotal)
    {
        return $this->factoriel($nombretotal) / ($this->factoriel(
                $nombredeupsvoulus) *
                 $this->factoriel($nombretotal - $nombredeupsvoulus));
    }

    public function factoriel ($nombre)
    {
        if ($nombre == 0) {
            return 1;
        } else
            return $nombre * $this->factoriel($nombre - 1);
    }

    public function probabilite ($tableaudeProbabilite, $tableauDesUpMinElements, 
            $nombreDeUpsRestants)
    {
        $N = $nombreDeUpsRestants; // nombre de up restant
        $probaFeu = $tableaudeProbabilite[0]; // proba d'up en feu
        $probaBois = $tableaudeProbabilite[1]; // proba d'up en bois
        $probaEau = $tableaudeProbabilite[2]; // proba d'up en eau
        $probaFoudre = $tableaudeProbabilite[3]; // proba d'up en foudre. La
                                                 // proba
                                                 // d'up en air se déduit des
                                                 // autres proba.
        $feu = $tableauDesUpMinElements[0]; // nombre de up min désiré en feu
        $bois = $tableauDesUpMinElements[1]; // nombre de up min désiré en bois
        $eau = $tableauDesUpMinElements[2]; // nombre de up min désiré en eau
        $foudre = $tableauDesUpMinElements[3]; // nombre de up min désiré en
                                               // foudre
        $air = $tableauDesUpMinElements[4]; // nombre de up min désiré en air
        
        $x = $feu;
        $s1 = 0;
        while ($x <= ($N - ($bois + $eau + $foudre + $air))) {
            $y = $bois;
            $s2 = 0;
            while ($y <= ($N - ($x + $eau + $foudre + $air))) {
                $z = $eau;
                $s3 = 0;
                while ($z <= ($N - ($x + $y + $foudre + $air))) {
                    $t = $foudre;
                    $s4 = 0;
                    while ($t <= ($N - ($x + $y + $z + $air))) {
                        $s4 += $this->combinaison($t, $N - ($x + $y + $z)) *
                                 pow($probaFoudre, $t) *
                                 pow(
                                        1 -
                                         ($probaFeu + $probaBois + $probaEau +
                                         $probaFoudre), $N - ($x + $y + $z + $t));
                        $t ++;
                    }
                    $s3 += $this->combinaison($z, $N - ($x + $y)) *
                             pow($probaEau, $z) * $s4;
                    $z ++;
                }
                $s2 += $this->combinaison($y, $N - $x) * pow($probaBois, $y) *
                         $s3;
                $y ++;
            }
            $s1 += $this->combinaison($x, $N) * pow($probaFeu, $x) * $s2;
            
            $x ++;
        }
        
        return $s1;
    }

    public static function tableauProbabilite ($dino)
    {
        // return array(probaFeu, probaBois, probaEau, probaFoudre)
        switch ($dino) {
            case 'winks':
                return array(
                        0.05,
                        0.1,
                        0.45,
                        0.3
                );
            case 'sirain':
                return array(
                        0.15,
                        0.1,
                        0.55,
                        0.1
                );
            case 'kabuki':
                return array(
                        0.1,
                        0.1,
                        0.3,
                        0.1
                );
            case 'wanman':
                return array(
                        0.15,
                        0.3,
                        0.05,
                        0.4
                );
            case 'moueffe':
                return array(
                        0.5,
                        0.2,
                        0.1,
                        0.05
                );
            case 'castivore':
                return array(
                        0.1,
                        0.4,
                        0.15,
                        0.10
                );
            case 'feross':
                return array(
                        0.3,
                        0.3,
                        0.3,
                        0.05
                );
            case 'nuagoz':
                return array(
                        0.05,
                        0.05,
                        0.3,
                        0.3
                );
            case 'planaille':
                return array(
                        0.1,
                        0.1,
                        0.1,
                        0.5
                );
            case 'pteroz':
                return array(
                        0.4,
                        0.1,
                        0.05,
                        0.15
                );
            case 'toufufu':
                return array(
                        0.1,
                        0.3,
                        0.05,
                        0.3
                );
            case 'gorilloz':
                return array(
                        0.15,
                        0.65,
                        0.05,
                        0.1
                );
            case 'pigmou':
                return array(
                        0.6,
                        0.15,
                        0.1,
                        0.1
                );
            case 'rocky':
                return array(
                        0.2,
                        0.1,
                        0.1,
                        0.55
                );
            case 'quetzu':
                return array(
                        0.4,
                        0.1,
                        0.4,
                        0.1
                );
            case 'smog':
                return array(
                        0.1,
                        0,
                        0.20,
                        0.4
                );
            case 'soufflet':
                return array(
                        0,
                        0.2,
                        0.20,
                        0.2
                );
            case 'santaz':
                return array(
                        0.05,
                        0.20,
                        0.10,
                        0.05
                );
            case 'hippoclamp':
                return array(
                        0.20,
                        0.20,
                        0.20,
                        0.20
                );
            case 'mahamuti':
                return array(
                        0.05,
                        0.40,
                        0.40,
                        0.10
                );
            default:
                return array(
                        0,
                        0,
                        0,
                        0
                );
        }
    }

    public function planDeCarriere ($anciensProbabilites, $elementVoulu)
    {
        /*
         * e est l'élément choisi. e=1 pour feu, 2 pour bois, 3 pour eau,
         * 4 pour foudre et 5 pour air, 0 pour pas de plan de carriere
         */
        // return array(probaFeu, probaBois, probaEau, probaFoudre)
        switch ($elementVoulu) {
            case 'eau':
                $e = 3;
                break;
            case 'feu':
                $e = 1;
                break;
            case 'foudre':
                $e = 4;
                break;
            case 'bois':
                $e = 2;
                break;
            case 'air':
                $e = 5;
                break;
            default:
                $e = 0;
        }
        
        $p1 = $anciensProbabilites[0]; /*
                                        * p1 est la probabilité de up en feu de
                                        * base du dinoz.
                                        */
        $p2 = $anciensProbabilites[1]; /*
                                        * p2 est la probabilité de up en bois de
                                        * base du dinoz.
                                        */
        $p3 = $anciensProbabilites[2]; /*
                                        * p3 est la probabilité de up en eau de
                                        * base du dinoz.
                                        */
        $p4 = $anciensProbabilites[3]; /*
                                        * p4 est la probabilité de up en foudre
                                        * de base du dinoz.
                                        */
        $p5 = 1 - $anciensProbabilites[0] - $anciensProbabilites[1] -
                 $anciensProbabilites[2] - $anciensProbabilites[3]; /*
                                                                    * p5
                                                                    * est
                                                                    * la
                                                                    * probabilité
                                                                    * de
                                                                    * up
                                                                    * en
                                                                    * air
                                                                    * de
                                                                    * base
                                                                    * du
                                                                    * dinoz.
                                                                    */
        
        /* détermination de la proba de up en feu avec pdc */
        $q1 = 0; /* proba de up en feu avec pdc */
        $q2 = 0; /* proba de up en bois avec pdc */
        $q3 = 0; /* proba de up en eau avec pdc */
        $q4 = 0; /* proba de up en foudre avec pdc */
        $q5 = 0; /* proba de up en air avec pdc */
        
        if ($e == 0) {
            $q1 = $p1;
            $q2 = $p2;
            $q3 = $p3;
            $q4 = $p4;
            $q5 = $p5;
        } else {
            
            if ($e == 1) {
                $q1 = $p1 + $p1 * (1 - $p1);
            } else {
                if ($e == 2) {
                    $q1 = (1 - $p2) * $p1;
                } else {
                    if ($e == 3) {
                        $q1 = (1 - $p3) * $p1;
                    } else {
                        if ($e == 4) {
                            $q1 = (1 - $p4) * $p1;
                        } else {
                            if ($e == 5) {
                                $q1 = (1 - $p5) * $p1;
                            }
                        }
                    }
                }
            }
            
            /* fin de la détermination de la proba de up en feu */
            
            /* Détermination de la proba de up en bois avec pdc */
            
            if ($e == 1) {
                $q2 = (1 - $p1) * $p2;
            } else {
                if ($e == 2) {
                    $q2 = $p2 + $p2 * (1 - $p2);
                } else {
                    if ($e == 3) {
                        $q2 = (1 - $p3) * $p2;
                    } else {
                        if ($e == 4) {
                            $q2 = (1 - $p4) * $p2;
                        } else {
                            if ($e == 5) {
                                $q2 = (1 - $p5) * $p2;
                            }
                        }
                    }
                }
            }
            
            /* Fin de la détermination de la proba de up en bois */
            
            /* Détermination de la proba de up en eau avec pdc */
            if ($e == 1) {
                $q3 = (1 - $p1) * $p3;
            } else {
                if ($e == 2) {
                    $q3 = (1 - $p2) * $p3;
                } else {
                    if ($e == 3) {
                        $q3 = $p3 + $p3 * (1 - $p3);
                    } else {
                        if ($e == 4) {
                            $q3 = (1 - $p4) * $p3;
                        } else {
                            if ($e == 5) {
                                $q3 = (1 - $p5) * $p3;
                            }
                        }
                    }
                }
            }
            
            /* Fin de la détermination de la proba de up en eau */
            
            /* Détermination de la proba de up en foudre avec pdc */
            if ($e == 1) {
                $q4 = (1 - $p1) * $p4;
            } else {
                if ($e == 2) {
                    $q4 = (1 - $p2) * $p4;
                } else {
                    if ($e == 3) {
                        $q4 = (1 - $p3) * $p4;
                    } else {
                        if ($e == 4) {
                            $q4 = $p4 + $p4 * (1 - $p4);
                        } else {
                            if ($e == 5) {
                                $q4 = (1 - $p5) * $p4;
                            }
                        }
                    }
                }
            }
            
            /* Fin de la détermination de la proba de up en foudre */
            
            /* Détermination de la proba de up en air avec pdc */
            if ($e == 1) {
                $q5 = (1 - $p1) * $p5;
            } else {
                if ($e == 2) {
                    $q5 = (1 - $p2) * $p5;
                } else {
                    if ($e == 3) {
                        $q5 = (1 - $p3) * $p5;
                    } else {
                        if ($e == 4) {
                            $q5 = (1 - $p4) * $p5;
                        } else {
                            if ($e == 5) {
                                $q5 = $p5 + $p5 * (1 - $p5);
                            }
                        }
                    }
                }
            }
        }
        /* RENVOYER RESULTAT */
        
        return array(
                $q1,
                $q2,
                $q3,
                $q4
        );
    }
}
?>