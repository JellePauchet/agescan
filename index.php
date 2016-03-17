<?php
	include_once("views/head.php");
	
	error_reporting( E_ALL );
	ini_set( "display_errors", 1 );
	include_once "models/Pagina_Data.class.php";
	$paginaData = new Pagina_Data();
	$paginaData->titel = "ageScan";
<<<<<<< HEAD
	
=======
	$paginaData->addCSS ("https://fonts.googleapis.com/css?family=Orbitron");
	$paginaData->addCSS = ("css/style.css");
	$dbInfo = "mysql:host=localhost;dbname=agescan"; $dbUser = "root";
	$dbPassword = "";
	try 
	{
		$db = new PDO( $dbInfo, $dbUser, $dbPassword );
		$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	} 
	catch ( Exception $e ) 
	{
		$paginaData->content = "<h1>De connectie lukt niet!</h1><p>$e</p>";
	}
>>>>>>> 60530510457864c641b0f24a2b3e696b21158e0a
	$paginaData->content = include_once "views/agescan.php";
	$pagina = include_once "views/pagina.php";
	echo $pagina;
	
	include_once('views/footer.php');
?>