var app = angular.module('AgeScan', []);
var timer;
var codeChecker = 0;
var counter = 0;

app.controller('AgeScanController', ['$scope', function ($scope) {
	$scope.submitBarcode = function()
	{
		var barcode = $scope.barcode; 
		var jaar = barcode.substr(0,2);
		var maand = barcode.substr(2,2);
		var dag = barcode.substr(4,2);

		var CheckCode = barcode.substr(0,9);
		var modulo = CheckCode % 97;
		var moduloChecker = barcode.substr(9,2);
		modulo = 97  - modulo ; 

		if(modulo == moduloChecker)
		{
			console.log("geboren in 19*")
			jaar = "19" + jaar;
			//console.log(jaar);
			}
			else
			{
				CheckCode = "2"+ barcode.substr(0,9);
				modulo = CheckCode % 97;
				modulo = 97 - modulo;
				
				if(modulo == moduloChecker)
				{
					console.log("geboren in 20*")
					jaar = "20" + jaar;
					console.log(jaar);
				}
				else
				{
					console.log("Fout met de leeftijd")
					codeChecker = 1;

				}
			}
			
			//console.log("modulo " + modulo);
			//console.log("moduloChecker " + moduloChecker);
			
			var currentDate = new Date();
			console.log(currentDate);
			
			var birthDate = new Date(jaar + '-' + maand +'-'+ dag);
			console.log(birthDate);

			var ageDifMs = Date.now() - birthDate.getTime();
			var ageDate = new Date(ageDifMs); // miliseconds from epoch

			if(codeChecker == 0)
			{
				var leeftijd = Math.abs(ageDate.getUTCFullYear() - 1970);
				counter++;
			}
			else
			{
				var leeftijd = "?";
				//change_color(leeftijd);
				codeChecker = 0;
			}
			console.log(leeftijd);
			$scope.teller = counter;
			$scope.leeftijd = leeftijd;
		}	
	}]);	  
