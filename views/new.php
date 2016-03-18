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
			<form class="form-horizontal" role="form" action="?pagina=new" method="post" autocomplete="on">
				<div class="form-group">
					<label class="control-label col-sm-3" for="Naam">Naam evenement:</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" name="Naam" placeholder="Naam">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3" for="Organisator">Organisator:</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" name="Organisator" placeholder="Organisator">
					</div>
				 </div>
				<div class="form-group">
					<label class="control-label col-sm-3" for="MinLeeftijd">Minimum leeftijd:</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" name="MinLeeftijd" placeholder="Minimum Leeftijd">
				</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3" for="MaxAanwezigen">Maximum aanwezigen:</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" name="MaxAanwezigen" placeholder="Maximum Aanwezigen">
				</div>
				</div>
					<button type="submit" id="submit" class="btn btn-info">Opslaan en verzenden</button>
			</form><br>
		<p>Klik op "opslaan en verzenden" om uw uw nieuw evenement te starten</p>
	</div>
</center>