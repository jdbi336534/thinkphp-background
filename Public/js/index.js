var app = angular.module("indexApp", []);

app.controller("indexCtrl", function($scope, $http) {
	$scope.ajadata = function() {
		$http.get('/thinkphp3.2.3/index.php/Home/Index/readlunbo').success(function(data) {
			$scope.flag = true;
			data.sort(function(a,b){
				return a.id-b.id;
			});
			$scope.item = data;
			console.log($scope.item);
		});
	}
	
	
	$scope.ajadata();
});