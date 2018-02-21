
var app = angular.module('challengeApp', ["ngRoute", 'ngAnimate', "ui.bootstrap"]);

app.config(function($routeProvider) {


    $routeProvider
        .when("/", {
            templateUrl: "home.html"
        })
        .when("/events", {
            templateUrl: "events.html"
        })
        .when("/about", {
            templateUrl: "about.html"
        })
        .when("/tickets", {
            templateUrl: "tickets.html"
        })
        .when("/map", {
            templateUrl: "nap.html"
        }).otherwise({
        template: "<h1>None</h1><p>Nothing has been selected</p>"
    });;
});


app.controller('challengeController', function($rootScope, $scope, $uibModal, $location,$http) {
    $scope.prueba = "Hola, Mundo";



});
