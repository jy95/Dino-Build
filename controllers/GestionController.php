<?php
class GestionController
{

    public function __construct()
    {

    }

    public function run()
    {
        if (!empty($_POST['nouveauDino'])){
            Donnees::getInstance()->insererNouveauDino($_POST['nouveauDino'], $_SESSION['id']);
        }
        if (!empty($_POST['numeroDino']) && !empty($_POST['element'])){
            $dino = Donnees::getInstance()->getDinoUser($_POST['numeroDino']);
            $valeur = false;

            if ($_POST['element'] == 'feu' && !empty($_POST ['competences'])){
                $dino->setFeu($_POST ['competences']);
                $valeur = true;
            }
            if ($_POST['element'] == 'eau' && !empty($_POST ['competences'])){
                $dino->setEau($_POST ['competences']);
                $valeur = true;
            }
            if ($_POST['element'] == 'air' && !empty($_POST ['competences'])){
                $dino->setAir($_POST ['competences']);
                $valeur = true;
            }
            if ($_POST['element'] == 'foudre' && !empty($_POST ['competences'])){
                $dino->setFoudre($_POST ['competences']);
                $valeur = true;
            }
            if ($_POST['element'] == 'bois' && !empty($_POST ['competences'])){
                $dino->setBois($_POST ['competences']);
                $valeur = true;
            }

            if ($valeur) {
                Donnees::getInstance()->misAJour($dino);
            }

        }
        $dinos = Donnees::getInstance()->getDinosUser($_SESSION['id']);
        $nombreInscrits = Donnees::getInstance()->nombreInscrits($_SESSION['id']);

        require_once(CHEMIN_VUES . 'gestion.php');
    }

}