routerApp.controller('favoritosController', function($scope, $http, $state, $stateParams, globalConfig) {

    $scope.isLoggedValue = localStorage.getItem('_id');
    $scope.isAdminValue = localStorage.getItem('isAdmin');

    if (typeof $scope.isLoggedValue !== 'object') {
        $scope.isLogged = true;
    } else $scope.isLogged = false;

    if (typeof $scope.isAdminValue !== 'object') {
        $scope.isAdmin = true;
    } else $scope.isAdmin = false;

    if (!$scope.isLogged) {
        $state.go('home');
    }
    
    $http({
        method: "GET",
        url: globalConfig.apiAddress + "/favoritos" + "/" + $scope.isLoggedValue
    }).then(function mySuccess(response) {
        $scope.receitas = response.data;
    }, function myError(response) {
        // Error
    });

    $scope.deleteFavorito = function(id) {
        $http({
            method: "DELETE",
            url: globalConfig.apiAddress + "/favoritos" + "/" + id + "/" + $scope.isLoggedValue
        }).then(function mySuccess(response) {
            $state.reload();
        }, function myError(response) {
            // Error
        });
    };

    $scope.redirectDetails = function(id) {
        $state.go('detalhes', { id: id });
    };
});
