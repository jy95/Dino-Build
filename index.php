<?php
session_start ();
// Variables globales
define ( 'CHEMIN_VUES', 'views/' );
define ( 'EMAIL', 'kratos585@hotmail.com' );
$date = date ( "j/m/Y" );
function chargerClasse($classe) {
	require 'models/' . $classe . '.class.php';
}
spl_autoload_register ( 'chargerClasse' );

// Ecrire ici le header de toutes pages HTML
require_once (CHEMIN_VUES . 'header.php');

// Tester si une variable GET 'action' est précisée dans l'URL index.php?action=...
$action = (isset ( $_GET ['action'] )) ? htmlentities ( $_GET ['action'] ) : 'default';
// Quelle action est demandée ?
switch ($action) {
	case 'helper' :
		require_once ('controllers/HelperController.php');
		$controller = new HelperController ();
		break;
	case 'contact' :
		require_once ('controllers/ContactController.php');
		$controller = new ContactController ();
		break;
	case 'demon' :
		require_once('controllers/CalculDemonController.php');
		$controller = new CalculDemonController ();
		break;
	default : // Par défaut, le contrôleur de l'accueil est sélectionné
		require_once ('controllers/AccueilController.php');
		$controller = new AccueilController ();
		break;
}
// Exécution du contrôleur correspondant à l'action demandée
$controller->run ();

// Ecrire ici le footer de toutes pages HTML
require_once (CHEMIN_VUES . 'footer.php');
?>