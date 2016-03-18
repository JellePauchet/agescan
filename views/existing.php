<?php
	if(isset($_POST["Naam"]))
	{
		echo "post ontvangen";
		echo "<pre>".print_r($_POST, true)."</pre>";
		
		echo "namen: " . countAantalEvenementenMetDezelfdeNaam($_POST["Naam"]);
	}


?>