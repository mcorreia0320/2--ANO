var app = angular.module('exercicio2_app', []);

app.controller('exercicio2_controlador', function($scope) {
   $scope.dados = [
		{nome:'Physics',nota:70},
		{nome:'Chemistry',nota:80},
		{nome:'Math',nota:65},
		{nome:'English',nota:75},
		{nome:'Hindi',nota:67}
	];
});