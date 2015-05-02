<?php
class HelperController {
	public function __construct() {
	}
	public function run() {
		
		$table = array (
				'feu',
				'bois',
				'air',
				'eau',
				'foudre' 
		);
		
		$table2 = array (
				'winks',
				'sirain',
				'kabuki',
				'wanman',
				'moueffe',
				'castivore',
				'feross',
				'nuagoz',
				'planaille',
				'pteroz',
				'toufufu',
				'gorilloz',
				'pigmou',
				'rocky',
				'quetzu' 
		);
		
		if (! empty ( $_POST ['choix'] ) && ! empty ( $_POST ['race'] ) && in_array ( $_POST ['choix'], $table ) && in_array ( $_POST ['race'], $table2 )) {
			$_SESSION ['choix'] = $_POST ['choix'];
			$_SESSION ['race'] = $_POST ['race'];
				
			if (($_SESSION ['race'] == 'quetzu' && ($_SESSION ['choix'] == 'eau' || $_SESSION ['choix'] == 'feu'))) {
				$table = Db::getInstance ()->casparticulier ( $_POST ['choix'] );
			} else {
				$table = Db::getInstance ()->select_toutcompetences ( $_POST ['choix'] );
			}
		} else {
			$table = "";
		}
		if (! empty ( $_POST ['mieux'] )) {
		
			if (! empty ( $_POST ['competences'] )) {
				if (!($_SESSION ['race'] == 'quetzu' && ($_SESSION ['choix'] == 'eau' || $_SESSION ['choix'] == 'feu'))) {
					$competencesdispo = Db::getInstance ()->select_competencesdispo ( $_POST ['competences'] );
					$tableau = Db::getInstance ()->select_numcompetencesdispo ( $_POST ['competences'] );
					$conseil = Db::getInstance ()->conseil ( $tableau, $_SESSION ['race'], $_SESSION ['choix'] );
					if ($conseil != false) {
						$competence = Db::getInstance ()->meilleurUp ( $conseil );
					}
				} else {
					$competencesdispo = Db::getInstance ()->casparticulier3( $_POST ['competences'] );
					$tableau = Db::getInstance ()->casparticulier4 ( $_POST ['competences'] );
					$conseil = Db::getInstance ()->conseil ( $tableau, $_SESSION ['race'], $_SESSION ['choix'] );
					if ($conseil != false) {
						$competence = Db::getInstance ()->casparticulier5 ( $conseil );
					}
				}
			} else {
				$rien = NULL;
				$competencesdispo = Db::getInstance ()->select_competencesdispo ( $rien );
				$tableau = Db::getInstance ()->select_numcompetencesdispo ( NULL );
				$conseil = Db::getInstance ()->conseil ( $tableau, $_SESSION ['race'], $_SESSION ['choix'] );
				if ($conseil != false) {
					$competence = Db::getInstance ()->meilleurUp ( $conseil );
				}
			}
		}
		
		require_once (CHEMIN_VUES . 'helper.php');
	}
}

?>