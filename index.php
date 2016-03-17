<?php
	error_reporting( E_ALL );
	ini_set( "display_errors", 1 );
	include_once "models/Pagina_Data.class.php";
	$paginaData = new Pagina_Data();
	$paginaData->titel = "ageScan";
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
	$paginaData->content = include_once "views/agescan.php";
	$pagina = include_once "views/pagina.php";
	echo $pagina;
?>