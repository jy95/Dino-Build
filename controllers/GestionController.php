<?php
class GestionController
{

    public function __construct()
    {

    }

    public function run()
    {

        if (!empty($_POST['nouveauDino']) && !empty($_POST['race'])){
            Donnees::getInstance()->insererNouveauDino($_POST['nouveauDino'], $_POST['race'], $_SESSION['id']);
        }

        if (!empty($_POST['aSupprimer'])){
            Donnees::getInstance()->deleteDino($_POST['aSupprimer']);
        }

        if (!empty($_POST['numeroDino']) && !empty($_POST['element'])){
            $_SESSION['element'] = $_POST['element'];
            $dino = Donnees::getInstance()->getDinoUser($_POST['numeroDino']);
            $table = Db::getInstance()->select_toutcompetences($_POST['element'], $dino->getRace());
            $funcname = "get" . ucfirst($_POST['element']);
            $competences_Acquises = $dino->$funcname();
            $valeur = false;

            if ( !empty($_POST ['competences'])) {
                $valeur = true;
                $funcname = "set" . ucfirst($_POST['element']);
                $dino->$funcname($_POST ['competences']);
            }

            if ($valeur) {
                Donnees::getInstance()->misAJour($dino);
                $_POST['numeroDino'] = null;
                $_POST['element'] = null;
                $dino = null;
            }

        }
        $dinos = Donnees::getInstance()->getDinosUser($_SESSION['id']);
        $nombreInscrits = Donnees::getInstance()->nombreInscrits($_SESSION['id']);
        require_once(CHEMIN_VUES . 'gestion.php');
    }

}