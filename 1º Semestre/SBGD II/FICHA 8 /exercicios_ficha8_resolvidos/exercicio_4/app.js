var app = angular.module('myApp', ['ui.router']);

app.config(function($stateProvider) {
  var page1State = {
    name: 'Exercicio 1',
    url: '/exercicio1',
    templateUrl: 'exercicio1.html'
  }

  var page2State = {
    name: 'Exercicio 3',
    url: '/exercicio3',
	controller: 'myCtrl',
    templateUrl: 'exercicio3.html'
  }

  $stateProvider.state(page1State);
  $stateProvider.state(page2State);
});

app.controller('myCtrl', function($scope, $http) {
  $scope.mostrarLista = function() 
  {
	  $http({
			method : "GET",
			url : "dados.json"
		}).then(function mySuccess(response) {
			//$scope.clientes = response.data.records;
			var data = response.data.records;
			data.sort(function (a, b) {
				return a.Country.localeCompare(b.Country);
			});
			$scope.clientes = data;
		}, function myError(response) {
			$scope.clientes = response.statusText;
		});
   }
   
   $scope.apagarItem = function($index) 
   {
		$scope.clientes.splice($index, 1);
   }
   
});