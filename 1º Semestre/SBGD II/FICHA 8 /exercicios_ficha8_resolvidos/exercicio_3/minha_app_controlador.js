var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope, $http) {

  $scope.mostrarLista = ()=> 
  {
	  $http({
			method : "GET",
			url : "dados.json"
		}).then((response) => {
			//$scope.clientes = response.data.records;
			var obtem_dados = response.data.records;
			obtem_dados.sort(function (a, b) {
				return a.Country.localeCompare(b.Country);
			});
			$scope.clientes = obtem_dados;
		}, function myError(response) {
			$scope.clientes = response.statusText;
		});
   }
   
   $scope.apagarItem = function($index) 
   {
		$scope.clientes.splice($index, 1);
   }
   
});