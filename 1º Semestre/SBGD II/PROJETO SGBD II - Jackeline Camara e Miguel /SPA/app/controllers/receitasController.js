routerApp.controller('receitasController', function($scope, $http, $state, $stateParams, globalConfig) {

    

    $scope.comentario = {
        pontuacao: 0,
        descricao: ""
    }

    $scope.isLoggedValue = localStorage.getItem('_id');
    $scope.isAdminValue = localStorage.getItem('isAdmin');

    if (typeof $scope.isLoggedValue !== 'object') {
        $scope.isLogged = true;
    } else $scope.isLogged = false;

    if (typeof $scope.isAdminValue !== 'object') {
        $scope.isAdmin = true;
    } else $scope.isAdmin = false;

    if ($state.current.name === 'home') {
        $http({
            method: "GET",
            url: globalConfig.apiAddress + "/receitas",
        }).then(function mySuccess(response) {
            $scope.receitas = response.data;
        }, function myError(response) {
            // Error
        });

        $scope.redirectDetails = function(id) {
            $state.go('detalhes', { id: id });
        };
    } else if ($state.current.name === 'detalhes') {
        $http({
            method: "GET",
            url: globalConfig.apiAddress + "/receitas/" + $stateParams.id
        }).then(function mySuccess(response) {
            $scope.receita = response.data;
        }, function myError(response) {
            // Error
        });

        $http({
            method: "GET",
            url: globalConfig.apiAddress + "/comentarios/" + $stateParams.id
        }).then(function mySuccess(response) {
            $scope.comentarios = response.data;

            // Função para retornar um array com a quantidade de estrelas
            $scope.getEstrellasArray = function(pontuacao) {
                return new Array(pontuacao);
            };
        }, function myError(response) {
            // Error
        });
        $scope.addToFavorites = function(id) {
            $http({
                method: "POST",
                url: globalConfig.apiAddress + "/favoritos/" + id + "/" + localStorage.getItem('_id')
            }).then(function mySuccess(response) {
                $state.go('favoritos');
            }, function myError(response) {
                // Error
            });
        };
        $scope.addComment = function(id, comentario) {
            $http({
                method: "POST",
                url: globalConfig.apiAddress + "/comentarios/" + id + "/" + localStorage.getItem('_id'),
                data: comentario
            }).then(function mySuccess(response) {
                $state.go($state.current, {}, { reload: true });
            }, function myError(response) {
                // Error
            });
        };
       
    } else if ($state.current.name === 'userRecipes') {
        if (!$scope.isLogged) {
            $state.go('login');
        }

        $http({
            method: "GET",
            url: globalConfig.apiAddress + "/utilizador/receitas/" + localStorage.getItem('_id')
        }).then(function mySuccess(response) {
            $scope.receitas = response.data;
        }, function myError(response) {
            // Error
        });

        $scope.redirectDetails = function(id) {
            $state.go('detalhes', { id: id });
        };

        $scope.deleteRecipe = function(id) {
            $http({
                method: "DELETE",
                url: globalConfig.apiAddress + "/utilizador/receitas/" + id
            }).then(function mySuccess(response) {
                $state.go($state.current, {}, { reload: true });
            }, function myError(response) {
                // Error
            });
        }
    } else if ($state.current.name === 'postRecipes') {
        if (!$scope.isLogged) {
            $state.go('login');
        }

        $scope.receita = {
            titulo: "",
            descricao: "",
            tempoPreparacao: 0,
            dificuldade: "",
            ingredientes: [''],
            pasos: [{ descricao: '' }],
            imagem: "",
            categoria: ""
        };


        $scope.addPaso = function() {
            $scope.receita.pasos.push({ descricao: '' });
        };

        $scope.addIngrediente = function() {
            $scope.receita.ingredientes.push('');
        };

        $scope.removePaso = function(index) {
            if ($scope.receita.pasos.length > 1){
                $scope.receita.pasos.splice(index, 1);
            }
        };

        $scope.removeIngrediente = function(index) {
            if ($scope.receita.ingredientes.length > 1) {
                $scope.receita.ingredientes.splice(index, 1);
            }
        };

        $scope.print = function() {
            var formData = new FormData();
            
            formData.append('arrayIngredientes', JSON.stringify($scope.receita.ingredientes));
            formData.append('titulo', $scope.receita.titulo);
            formData.append('descricao', $scope.receita.descricao);
            formData.append('tempoPreparacao', $scope.receita.tempoPreparacao);
            formData.append('dificuldade', $scope.receita.dificuldade);
            formData.append('pasos', JSON.stringify($scope.receita.pasos));
            formData.append('nomeCategoria', $scope.receita.categoria);
            formData.append('utilizador_id', localStorage.getItem('_id'));
            
            // Adcionar a imagem
            formData.append('imagem', $scope.receita.imagem);
        
            $http.post(globalConfig.apiAddress + '/receitas', formData, {
                transformRequest: angular.identity,
                headers: { 'Content-Type': undefined }
            }).then(function(response) {
                $state.go('userRecipes');
            }).catch(function(error) {
                console.error('Error al crear la receta', error);
            });
        }
        


    }
});
