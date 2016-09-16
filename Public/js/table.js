var app = angular.module("backApp", []);

app.controller("backCtrl", function($scope, $http) {
	$scope.flag = false;
	$scope.selectedItem=-1;
	$scope.ajadata = function() {
		$http.get('/thinkphp3.2.3/index.php/Home/Index/readlist').success(function(data) {
			$scope.flag = true;
			$scope.categorie = data;
			console.log(data);
		});

	}
	$scope.deldata=function(x){
		//console.log($scope.categorie);
		var numid=$scope.categorie[x].id;
		console.log(numid);
		
		var flag=false;
		$.post('/thinkphp3.2.3/index.php/Home/Index/deldata',{id:numid},function(data) {
			if(data=="ok"){
				alert('删除成功！');
			}
			
		});
		//从页面中删除
		 $scope.categorie.splice(x,1);
		 	
		
		 
		  
		 
	}
	$scope.add=function(x){
		   var obj={id:101,age:30,name:"李四"};
    $scope.list.push(obj);
	}
	$scope.ajadata();

});
