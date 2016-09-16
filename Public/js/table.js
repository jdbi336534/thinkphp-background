var app = angular.module("backApp", []);

app.controller("backCtrl", function($scope, $http) {
	$scope.flag = false;
	$scope.selectedItem=-1;
	$scope.ajadata = function() {
		$http.get('/thinkphp3.2.3/index.php/Home/Index/readlist').success(function(data) {
			$scope.flag = true;
			$scope.categorie = data;
			//console.log(data);
		});

	}
	$scope.deldata=function(x){
		$scope.selectedItem=x;
	}
	$scope.ajadata();

});
