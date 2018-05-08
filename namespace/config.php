<?php

spl_autoload_register(function($nameClass){

	var_dump($nameClass);

	$dirClass = "class";
	// Codigo original da aula (Windows)
	//$filename = $dirClass . DIRECTORY_SEPARATOR . $nameClass . ".php";	
	
	// Codigo ajustado para ambiente Linux
	$filename = str_replace ("\\", "/", $dirClass . DIRECTORY_SEPARATOR . $nameClass . ".php");
	
	if (file_exists($filename)) {			
		require_once($filename);		
	}	

});

?>
