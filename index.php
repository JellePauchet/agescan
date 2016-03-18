<?php
	include_once("views/head.php");
	
	error_reporting( E_ALL );
	ini_set( "display_errors", 1 );
	include_once "models/Pagina_Data.class.php";
	
	$paginaData = new Pagina_Data();
	$paginaData->titel = "ageScan";

	if(isset($_GET["pagina"]))
	{
		goToUrl($_GET["pagina"]);
	}
	else
	{
		goToUrl("start");
	}
	
	function goToUrl($url)
	{
		//$paginaData->content = include_once("views/$url.php");	
		include_once("views/$url.php");		
	}
	
	$pagina = include_once "views/pagina.php";
	echo $pagina;
	
	include_once('views/footer.php');
?>