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