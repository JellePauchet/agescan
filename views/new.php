<?php
	if(isset($_POST["Naam"]))
	{
		echo "<pre>".print_r($_POST, true)."</pre>";
		
		if(countAantalEvenementenMetDezelfdeNaam($_POST["Naam"]) == 0)
		{
			InsertNewEvenement($_POST["Naam"], $_POST["Organisator"], $_POST["MinLeeftijd"], $_POST["MaxAanwezigen"]);
			$_SESSION["EvenementID"] = GetEventIdByName($_POST["Naam"])["IDEvenement"];
			echo '<META http-equiv="refresh" content="0;URL=?pagina=agescan">';
		}
		else
		{
			echo "Evenement bestaat al";
		}
	}
?>



<center>
	<h1>Voeg een nieuw evenement toe</h1>
		<div>
			<form class="form" role="form" action="existing.php" method="post" autocomplete="off">
				<div class="form-group">
					<label for="Naam">Naam evenement:</label>
				<div class="col-sm-8">
					<input type="name" class="form-control" id="Naam">
				</div>
				</div>
				<div class="form-group">
					<label for="Organisator">Organisator:</label>
				<div class="col-sm-8">
					<input type="name" class="form-control" id="Organisator">
				</div>
				<div class="form-group">
					<label for="MinLeeftijd">Minimum leeftijd:</label>
				<div class="col-sm-8">
					<input type="name" class="form-control" id="MinLeeftijd">
				</div>
				</div>
				<div class="form-group">
					<label for="MaxAanwezigen">Maximum aanwezigen:</label>
				<div class="col-sm-8">
					<input type="name" class="form-control" id="MaxAanwezigen">
				</div>
				</div>
					<button type="submit" id="submit" class="btn btn-default">Opslaan en verzenden</button>
			</form><br>
		<p>Klik op "opslaan en verzenden" om uw uw nieuw evenement te starten</p>
	</div>
</center>