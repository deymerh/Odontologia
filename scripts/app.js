'use strict';

var app = angular.module('RinaDent', [
	'ui.router'
])

//app.constant('ApiUrl', 'http://localhost/backend');
app.constant('ApiUrl', 'http://198.211.107.55:8000');



app.config(function($stateProvider, $urlRouterProvider, $httpProvider){
	
//	$httpProvider.defaults.headers.common = {};
//	$httpProvider.defaults.headers.post = {};
//  	$httpProvider.defaults.headers.put = {};
// 	$httpProvider.defaults.headers.patch = {};
	
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
