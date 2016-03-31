'use strict';

app.controller('LoginController', function(LoginFactory, $location){

	var vm = this;

	vm.user = {};

	vm.login = function(user){
		LoginFactory.login(user).then(function(data){
			console.log(data.data);
			alert('Login correcto!');
			$location.url('/menu');
		})
	}

	

});
