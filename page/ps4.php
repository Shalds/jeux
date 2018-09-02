<?php

	ob_start();
?>

<h2>Ps4</h2>

<?php
	
	$content = ob_get_clean();

  require "frontend/template/template.php";
?>