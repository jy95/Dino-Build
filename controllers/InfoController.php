<?php 
class InfoController{
	
	public function __construct() {
	
	}
			
	public function run(){	
		
		# Un contrôleur se termine en écrivant une vue
		require_once(CHEMIN_VUES . 'info.php');
	}
	
}
?>