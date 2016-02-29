'use strict';

var app = angular.module('RinaDent', [
	'ui.router'
])

app.constant('ApiUrl', 'http://localhost/rinadent');

app.config(function($stateProvider, $urlRouterProvider){

	$stateProvider
		.state('login', {
			url: '/login',
			templateUrl: 'views/login.html',
			controller: 'LoginController',
			controllerAs: 'login'
		});

	$urlRouterProvider.otherwise('/login');

});