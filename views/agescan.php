<?php
	if(isset($_GET["id"]))
	{
		$_SESSION["EvenementID"] = $_GET["id"];
	}
	
	if(!isset($_SESSION["EvenementID"]))
	{
		echo '<META http-equiv="refresh" content="0;URL=?pagina=start">';
	}
?>

<div ng-app="AgeScan">
	<div ng-controller="AgeScanController">
		<div id="leeftijdDiv">
				<p>{{leeftijd}}</p>
		</div>
		<p class="aantal">Aantal bezoekers:</p>
		<p id="bezoekers">
			<script>
				var aantal = <?php echo CountFeestgangersOpEvenement($_SESSION["EvenementID"]) ?>;
				document.getElementById('bezoekers').innerHTML = aantal;
				
				function increment()
				{
					aantal+= 0.5;
					document.getElementById('bezoekers').innerHTML = aantal;
				}
			</script>
		</p>
		<p class= "aantal">van de </p>
		<p class= "aantal">
		<?php
			echo MaxFeestgangers($_SESSION["EvenementID"]);
		?>
		</p>
		<form autocomplete="off" ng-submit="submitBarcode()">
			<input id ="inputaddress"ng-model="barcode" autofocus/>
			<input hidden type="submit" id="submit" value="Submit" />
		</form>
	</div>
	
	<script type='text/javascript'  src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
	<script type='text/javascript' src="http://ajax.googleapis.com/ajax/libs/angularjs/1.0.4/angular.js"></script>
	<script type='text/javascript' src="js/AgeScan.js"></script>
</div>