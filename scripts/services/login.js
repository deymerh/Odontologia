'use strict';

app.factory('LoginFactory', function($http, ApiUrl){

	var LoginFactory = {

		login: function(user){
			return $http.post(ApiUrl + '/login', user).success(function(data){
				return data;
			})
			.error(function(err){
				console.log(err);
			})
		}

	};

	return LoginFactory

});