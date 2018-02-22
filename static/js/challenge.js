
var app = angular.module('challengeApp', ["ngRoute", 'ngAnimate', "ui.bootstrap"]);

app.config(function($routeProvider) {


    $routeProvider
        .when("/", {
            templateUrl: function(params){ return  "index.php/ajax/query/curso?usuario=" + window.usuario;   }
        })

        .when("/register", {
            templateUrl: "index.php/vista/get/register"
        })
        .when("/login", {
            templateUrl: "index.php/vista/get/login"
        })
        .when("/cursos", {
            //templateUrl: "index.php/ajax/query/curso"
            templateUrl: function(params){ return  "index.php/ajax/query/curso?usuario=" + window.usuario;   }

        })
        .when("/materias", {
            templateUrl: "index.php/ajax/query/materia"
        })
        .when("/categorias", {
            templateUrl: "index.php/ajax/query/categoria"
        }).when("/curso/:curso_id?", {
        templateUrl: function(params){ return 'index.php/ajax/form/curso_' + params.curso_id;   }
        })
        .when("/materia/:materia_id?/:curso_id?", {
            templateUrl: function(params){ return 'index.php/ajax/form/materia_' + params.materia_id+"?curso_id="+params.curso_id;   }

        })
        .when("/categoria/:categoria_id?", {
            templateUrl: function(params){ return 'index.php/ajax/form/categoria_' + params.categoria_id;   }

        }).otherwise({
        template: "<h1>None</h1><p>Nothing has been selected</p>"
    });;
});


app.controller('challengeController', function($rootScope, $scope, $uibModal, $location,$http) {
    $scope.prueba = "Hola, Mundo";
    $scope.toggles = [0, 0];
    $rootScope.login = {'logged':0};
    $rootScope.usuario = Cookies.get('usuario');
    window.usuario = $rootScope.usuario;
    $rootScope.login.logged = Cookies.get('logged');

    $scope.logout = function() {
        $rootScope.usuario = "";
        window.usuario = $rootScope.usuario;
        $rootScope.login.logged = 0;
        Cookies.remove('usuario');
        Cookies.remove('logged');

        location.hash = "!/";
        $location.path("/");
        location.reload();
    };

    $scope.nueva_materia = function() {
        alert("8");
    }

    $scope.materias = function($id) {
        return "index.php/ajax/query/materia?curso_id="+$id;
    }

    $scope.ingresar = function() {
        var data = $(".form.login").serialize();
        var correo = $(".form.login [name='correo']").val();
        var request = $.ajax({
            url: "index.php/ajax/alogin/user",
            method: "POST",
            data: data,
            dataType: "html"
        });

        request.done(function( msg ) {
            if (msg) {
                alert(msg);
            }
            else {
                Cookies.set('usuario', correo);
                Cookies.set('logged', 1);
                $rootScope.usuario = correo;
                window.usuario = $rootScope.usuario;
                $rootScope.login.logged = 1;
                location.hash = "!/";
                $location.path("/");
                location.reload();
            }
        });
        request.fail(function( msg ) {
           alert("8");
        });
    };

    $scope.toggle = function(i) {
        $scope.toggles[i] = !$scope.toggles[i];
    }

    $scope.guardar = function(model, salir) {
        if (salir) {
            location.hash = "!/"+model+'s';
            $location.path("/"+model+'s');
            location.reload();

        }

        var data = $(".form."+model).serialize();
        var request = $.ajax({
            url: "index.php/ajax/save/"+model,
            method: "POST",
            data: data,
            dataType: "html"
        });

        request.done(function( msg ) {
            if (msg) {
                alert(msg);
            }
            else {
                location.hash = "!/"+model+'s';
                $location.path("/"+model+'s');
                location.reload();
            }
        });



    }

    $scope.abrir = function(a, n) {
        location.hash = "!/"+a+"/"+n;
        $location.path("/"+a+"/"+n);
        location.reload();
    }

    $scope.registrar = function() {
            var data = $(".form.register").serialize();
        var correo = $(".form.register [name='correo']").val();
            var request = $.ajax({
                url: "index.php/ajax/create/user",
                method: "POST",
                data: data,
                dataType: "html"
            });

            request.done(function( msg ) {
                if (msg) {
                    alert(msg);
                }
                else {
                    Cookies.set('usuario', correo);
                    Cookies.set('logged', 1);

                    $rootScope.usuario = correo;
                    window.usuario = $rootScope.usuario;
                    $rootScope.login.logged = 1;
                    location.hash = "!/";
                    $location.path("/");
                    location.reload();
                }
            });

    };

});


app.config(['$httpProvider', function($httpProvider) {
    //initialize get if not there
    if (!$httpProvider.defaults.headers.get) {
        $httpProvider.defaults.headers.get = {};
    }

    // Answer edited to include suggestions from comments
    // because previous version of code introduced browser-related errors

    //disable IE ajax request caching
    $httpProvider.defaults.headers.get['If-Modified-Since'] = 'Mon, 26 Jul 1997 05:00:00 GMT';
    // extra
    $httpProvider.defaults.headers.get['Cache-Control'] = 'no-cache';
    $httpProvider.defaults.headers.get['Pragma'] = 'no-cache';
}]);