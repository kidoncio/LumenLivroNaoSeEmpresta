'use strict';

var livronaoseemprestaApp = angular.module('livronaoseemprestaApp',[
		'ngRoute',
		'ngResource',
		'livronaoseemprestaApp.controllers',
		//'livronaoseemprestaApp.services',
		'ui.bootstrap'
	]);

livronaoseemprestaApp.config(['$routeProvider', '$locationProvider',
	function($routeProvider, $locationProvider){
		$routeProvider.
		//autors
		when('/autor', {
			templateUrl : 'partials/autors/index',
			controller : 'autorsCtrl'
		}).
		when('/autor/new', {
			templateUrl : 'partials/autors/new',
			controller : 'autorsCtrl'
		}).
		when('/autor/:autor_id', {
			templateUrl : 'partials/autors/edit',
			controller : 'autorsCtrl'
		}).
		when('/categoria', {
			templateUrl : 'partials/categorias/index',
			controller : 'categoriasCtrl'
		}).
		when('/categoria/new', {
			templateUrl : 'partials/categorias/new',
			controller : 'categoriasCtrl'
		}).
		when('/categoria/:categoria_id', {
			templateUrl : 'partials/categorias/edit',
			controller : 'categoriasCtrl'
		}).
		when('/clients', {
			templateUrl : 'partials/clients/index',
			controller : 'clientsCtrl'
		}).
		when('/clients/new', {
			templateUrl : 'partials/clients/new',
			controller : 'clientsCtrl'
		}).
		when('/clients/:client_id', {
			templateUrl : 'partials/clients/edit',
			controller : 'clientsCtrl'
		}).
		when('/livro', {
			templateUrl : 'partials/livros/index',
			controller : 'livrosCtrl'
		}).
		when('/livro/new', {
			templateUrl : 'partials/livros/new',
			controller : 'livrosCtrl'
		}).
		when('/livro/:livro_id', {
			templateUrl : 'partials/livros/edit',
			controller : 'livrosCtrl'
		}).
		when('/emprestado', {
			templateUrl : 'partials/emprestados/index',
			controller : 'emprestadoCtrl'
		}).
		when('/emprestado/new', {
			templateUrl : 'partials/emprestados/new',
			controller : 'emprestadoCtrl'
		}).
		when('/emprestado/:rent_id', {
			templateUrl : 'partials/emprestados/edit',
			controller : 'emprestadoCtrl'
		}).
		otherwise({
			redirectTo : '/'
		});
		$locationProvider.html5Mode(true);
	}
]);

 livronaoseemprestaApp.run(['$route', function($route)  {
   $route.reload();                                                            
}]);