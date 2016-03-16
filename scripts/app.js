'use strict';

var app = angular.module('RinaDent', [
	'ui.router'
])

//app.constant('ApiUrl', 'http://localhost/backend');
app.constant('ApiUrl', 'http://localhost/rinadent/backend');



app.config(function($stateProvider, $urlRouterProvider){

	$stateProvider
		.state('login', {
			url: '/login',
			templateUrl: 'views/login.html',
			controller: 'LoginController',
			controllerAs: 'login'
		})
		.state('menu', {
			url: '/menu',
			templateUrl: 'views/menu.html',
			controller: 'menuController',
			controllerAs: 'menu'
		});

	$urlRouterProvider.otherwise('/login');

});