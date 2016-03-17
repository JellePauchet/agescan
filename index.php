<?php
	include_once("views/head.php");
	
	error_reporting( E_ALL );
	ini_set( "display_errors", 1 );
	include_once "models/Pagina_Data.class.php";
	$paginaData = new Pagina_Data();
	$paginaData->titel = "ageScan";
	
	$paginaData->content = include_once "views/agescan.php";
	$pagina = include_once "views/pagina.php";
	echo $pagina;
	
	include_once('views/footer.php');
?>