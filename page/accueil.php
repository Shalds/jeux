<?php

	ob_start();
?>

<h2>Accueil</h2>

<?php
	
	$content = ob_get_clean();

  require "frontend/template/template.php";
?>