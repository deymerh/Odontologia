'use strict';

app.factory('LoginFactory', function($http, ApiUrl){

	var LoginFactory = {

		login: function(user){
			 return  $http({
             		 	method: 'POST',
             		 	url: "http://198.211.107.55:8000/login",
              	 		params: user
            		}).success(function(data){
		return data;
              console.log(data);
            }).error(function(err){
              console.log(err);
            });
		}

	};

	return LoginFactory

});
