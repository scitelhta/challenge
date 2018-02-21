
var app = angular.module('challengeApp', ["ngRoute", 'ngAnimate', "ui.bootstrap"]);

app.config(function($routeProvider) {


    $routeProvider
        .when("/", {
            templateUrl: "home.html"
        })

        .when("/register", {
            templateUrl: "index.php/vista/get/register"
        })
        .when("/login", {
            templateUrl: "index.php/vista/get/login"
        })
        .when("/cursos", {
            templateUrl: "index.php/ajax/query/curso"
        })
        .when("/materias", {
            templateUrl: "index.php/ajax/query/materia"
        })
        .when("/categorias", {
            templateUrl: "index.php/ajax/query/categoria"
        }).when("/curso", {
        templateUrl: "index.php/ajax/form/curso"
        })
        .when("/materia", {
            templateUrl: "index.php/ajax/form/materia"
        })
        .when("/categoria", {
            templateUrl: "index.php/ajax/form/categoria"
        }).otherwise({
        template: "<h1>None</h1><p>Nothing has been selected</p>"
    });;
});


app.controller('challengeController', function($rootScope, $scope, $uibModal, $location,$http) {
    $scope.prueba = "Hola, Mundo";




});
