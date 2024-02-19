routerApp.controller('authController', function($scope, $http, $state, $stateParams, globalConfig) {


    $scope.userRegistration ={
        username: "",
        email: "",
        password: ""
    }

    $scope.userLogin ={
        email: "",
        password: ""
    }

    $scope.error = null;
    
    
    $scope.isLoggedValue = localStorage.getItem('_id');
    $scope.isAdminValue = localStorage.getItem('isAdmin');
    
    if (typeof $scope.isLoggedValue !== 'object') {
        $scope.isLogged = true;
    } else $scope.isLogged = false;

    if (typeof $scope.isAdminValue !== 'object') {
        $scope.isAdmin = true;
    } else $scope.isAdmin = false;

    if ($scope.isLogged) {
        $state.go('home');
    }

    $scope.signup = (userRegistration) =>{
        $http({
            method: 'POST',     
            url: globalConfig.apiAddress + '/signup',
            data: userRegistration
        }).then((result) =>{
            localStorage.setItem("_id", result.data._id);
            if (result.data.isAdmin) {
                localStorage.setItem("isAdmin", result.data.isAdmin);
            }
            $scope.error = null;
            $state.go('home');
        }).catch((err) =>{
            $scope.error = err.data.message;
        })
    }

    $scope.login = (userLogin) =>{
        $http({
            method: 'POST',     
            url: globalConfig.apiAddress + '/login',
            data: userLogin
        }).then( (result) =>{
            localStorage.setItem("_id", result.data._id);
            if (result.data.isAdmin) {
                localStorage.setItem("isAdmin", 1);
            }
            $scope.error = null;
            $state.go('home');
        }).catch((err) =>{
            $scope.error = err.data.message;
        })
    }
    
});
