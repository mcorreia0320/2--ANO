routerApp.controller('adminController', function($scope, $http, $state, $stateParams, globalConfig) {

    $scope.isLoggedValue = localStorage.getItem('_id');
    $scope.isAdminValue = localStorage.getItem('isAdmin');
    
    if (typeof $scope.isLoggedValue !== 'object') {
        $scope.isLogged = true;
    } else $scope.isLogged = false;

    if (typeof $scope.isAdminValue !== 'object') {
        $scope.isAdmin = true;
    } else $scope.isAdmin = false;

    if (!$scope.isAdmin) {
        $state.go('home');
    }
    

    $http({
        method: 'GET',
        url: globalConfig.apiAddress + '/admin'
    }).then(function mySuccess(response) {
        $scope.utilizadores = response.data;
    }, function myError(response) {
        // Error
    });

    $scope.deleteUser = function(id) {
        $http({
            method: 'DELETE',
            url: globalConfig.apiAddress + '/admin/' + id
        }).then(function mySuccess(response) {
            $state.reload();
        }, function myError(response) {
            // Error
        });
    }
});
