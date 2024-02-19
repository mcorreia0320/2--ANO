

var routerApp = angular.module('routerApp', ['ui.router']);

routerApp.config(function($stateProvider, $urlRouterProvider) {
    
    $urlRouterProvider.otherwise('/home');
    
    $stateProvider
		.state('home', {
            url: '/home',
            templateUrl: 'views/index.html',
            controller: 'receitasController'
        }).state('detalhes', {
            url: '/detalhes/:id',
            templateUrl: 'views/detalhes.html',
            controller: 'receitasController'
        }).state('signup', {
            url: '/signup',
            templateUrl: 'views/signup.html',
            controller: 'authController'
        }).state('login', {
            url: '/login',
            templateUrl: 'views/login.html',
            controller: 'authController'
        }).state('favoritos', {
            url: '/favoritos',
            templateUrl: 'views/favoritos.html',
            controller: 'favoritosController'
        }).state('userRecipes', {
            url: '/userRecipes',
            templateUrl: 'views/userRecipes.html',
            controller: 'receitasController'
        }).state('admin', {
            url: '/admin',
            templateUrl: 'views/admin.html',
            controller: 'adminController'
        }).state('postRecipes', {
            url: '/postRecipes',
            templateUrl: 'views/postRecipes.html',
            controller: 'receitasController'
        })
        
}).constant("globalConfig", {
    apiAddress: 'http://localhost:3000/api/spa'
});

const isLoggedIn = localStorage.getItem('_id');

if (typeof isLoggedIn !== 'object') {
    
    document.addEventListener('DOMContentLoaded', function() {
       document.querySelectorAll(".authOff").forEach(function(element) {
              element.style.display = 'none';
         });

        document.querySelectorAll(".authOn").forEach(function(element) {
            element.classList.toggle('d-none');
        });

        document.getElementById("logout").addEventListener("click", function() {
            localStorage.clear();
            location.reload();
        });
    });
}

const isAdmin = localStorage.getItem('isAdmin');

if (typeof isAdmin != "object"){
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById("adminOn").classList.toggle('d-none');
    });
}


