
var app=angular.module("myApp",[]);

			app.controller("myCtrl",function($scope,$http){
				$scope.flag=false;
				$scope.ajadata=function(){
					$http.get('/thinkphp3.2.3/index.php/Home/Index/readlist').success(function(data){
						$scope.flag=true;
						$scope.categorie=data;
						//console.log(data);
					});
					
					};
				$scope.ajadata();
				
			});
			
