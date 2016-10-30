var app = angular.module("indexApp", []);

app.controller("indexCtrl", function($scope, $http) {
	$scope.ajadata = function() {
		$http.get('/thinkphp3.2.3/Public/data/imgsrc.json').success(function(data) {
			$scope.flag = true;
			data.sort(function(a,b){
				return a.id-b.id;
			});
			$scope.item = data;
			$scope.imgsrc=$scope.item[0].imgsrc
			console.log($scope.item);
		});
	}
	$scope.cartmany=function(){
					$http.get('/thinkphp3.2.3/index.php/Home/Index/readlistid').success(function(data) {
						$scope.manycart=data.length;
					})
				}
	
	$scope.ajadata();
	$scope.cartmany();
});