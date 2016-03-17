<?php
	return 
	"<!DOCTYPE html>
	<html>
	<head>
		<title>$paginaData->title</title>
		<meta http-equiv='Content-Type' content='text/html;charset=utf-8'/>
		$paginaData->css
		$paginaData->embeddedStyle
	</head>
	<body>
		$paginaData->navigatie
		$paginaData->content
	</body>
	</html>";
?>