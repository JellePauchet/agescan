<!DOCTYPE html>
<html>
	<head>
		<title>AgeScan</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	</head>
	<body>
	
		<div class="navbar navbar-inverse navbar-static-top">
			<div class="container">
				<div class="navbar-header">
				<a href="#" class="navbar-brand">AgeScan</a>
					<button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				
				<div class="collapse navbar-collapse navHeaderCollapse">
				
					<ul class="nav navbar-nav navbar-right">
					
						<li class="active"><a href="index.html">Home</a></li>				
					</ul>
				
				</div>
			</div>
		</div>
		
		<div class="container">
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

</div>
		
		<div class="navbar navbar-default navbar-fixed-bottom">
			<div class="container">
				<p class="navbar-text">Deze site is gemaakt door <a href="http://teamcrap.be">Team Crap</a></p>
			</div>
		</div>
		
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="js/bootstrap.js"></script>
	</body>
</html>