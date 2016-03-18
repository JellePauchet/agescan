<div ng-app="AgeScan">
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
</div>