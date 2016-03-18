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
		<form action="existing.php" method="post" autocomplete="off">
			<table>
				<tr>
					<td width="180px">Naam evenement</td>
					<td><input name ="Naam" size="35"/></td>
				</tr>
				<tr>
					<td>Naam organisator</td>
					<td><input name ="Organisator" size="35"/></td>
				</tr>
				<tr>
					<td>Minimum leeftijd</td>
					<td><input type="number" name ="MinLeeftijd" size="35"/></td>
				</tr>
				<tr>
					<td>Maximum aanwezigen</td>
					<td><input type="number" name ="MaxAanwezigen" size="35"/></td>
				</tr>
			</table><br>
			<input type="submit" id="submit" value="Opslaan en verzenden" />
		</form><br>
		<p>Klik op "opslaan en verzenden" om uw uw nieuw evenement te starten</p>
	</div>
</center>