
var app=angular.module("myApp",[]);

			app.controller("myCtrl",function($scope,$http){
				$scope.flag=false;
				$scope.ajadata=function(){
					$http.get('/thinkphp3.2.3/index.php/Home/Index/readlist').success(function(data){
						$scope.flag=true;
						$scope.categorie=data;
						console.log(data);
					});
					
					}
				$scope.addcart=function(id){
					
					$http.get('/thinkphp3.2.3/index.php/Home/Index/listid?listid='+id).success(function(data){
						alert(data);
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
			
