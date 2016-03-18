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

	<form role="form" autocomplete="off">
  <div class="form-group">
    <label for="Naam">Naam:</label>
    <input type="name" class="form-control" id="Naam">
  </div>
  <div class="form-group">
    <label for="Organisator">Organisator:</label>
    <input type="name" class="form-control" id="Organisator">
  </div>
  <div class="form-group">
    <label for="MinLeeftijd">Minimum Leeftijd:</label>
    <input type="number" class="form-control" id="MinLeeftijd">
  </div>
  <div class="form-group">
    <label for="MaxAanwezigen">Maximum Leeftijd:</label>
    <input type="number" class="form-control" id="MaxAanwezigen">
  </div>
  
  <button type="submit" id="submit" class="btn btn-default">Submit</button>
</form>

	</div>
</center>