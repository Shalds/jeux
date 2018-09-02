
<?php
	require "frontend/controller/controller.php";

	$controllerFront = new FrontendController();

	if($_GET['page'] == 0){
		$controllerFront->accueilAction();

	} elseif($_GET['page'] == 1){
		$controllerFront->worldofwarcraftAction(); 

	} elseif($_GET['page'] == 2){
		$controllerFront->hearthstoneAction(); 

	} elseif($_GET['page'] == 3){
		$controllerFront->switchAction(); 

	} elseif($_GET['page'] == 4){
		$controllerFront->ps4Action(); 

	}

  
?>

