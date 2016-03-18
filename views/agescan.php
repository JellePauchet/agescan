<div ng-app="AgeScan">
	<h1>AGESCAN</h1>
	<div ng-controller="AgeScanController">
		<div id="leeftijdDiv">
				<p>{{leeftijd}}</p>
		</div>
		<form autocomplete="off" ng-submit="submitBarcode()">
			<input id ="inputaddress"ng-model="barcode" autofocus/>
			<input hidden type="submit" id="submit" value="Submit" />
		</form>
	</div>
	
	<script type='text/javascript'  src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
	<script type='text/javascript' src="http://ajax.googleapis.com/ajax/libs/angularjs/1.0.4/angular.js"></script>
	<script type='text/javascript' src="js/AgeScan.js"></script>

	<?php		
		echo "aantal evenementen: ". countEvents() . "<br>";
		echo "info over user 1: <pre>". print_r(GetfeestgangerById(1), true) ."</pre><br>";
		echo "info over user met RRNR 8378773: <pre>". print_r(GetfeestgangerByRRNR(8378773), true) ."</pre><br>";
		echo "aantal feestgangers: ". CountFeestgangers()."<br>";
		echo "aantal feestgangers op het evenement met de ID 1: ". CountFeestgangersOpEvenement(1)."<br>";
		
		echo "<br>";
	?>
	
</div>