var app = angular.module("backApp", ["ngDialog"]);

app.controller("backCtrl", function($scope, $http,ngDialog) {
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
		//console.log($scope.categorie);
//		var numid=$scope.categorie[x].id;
//		console.log(numid);
		
		var flag=false;
		$.post('/thinkphp3.2.3/index.php/Home/Index/deldata',{id:numid},function(data) {
			if(data=="ok"){
				alert('删除成功！');
			}
			
		});
		//从页面中删除
		 $scope.categorie.splice(x,1);
		 	
		//angular.element('.redcol').html('fuck');
	 
	}
	$scope.getindex=function(index){
		$scope.index=index;
		$scope.id=$scope.categorie[index].id;
		console.log($scope.id);
		//alert(index);
		
	}
	$scope.gengxin=function(){
		var num1=$scope.prdname1;
		var num2=$scope.prdfont1;
		var num3=$scope.prdi;
		var num4=$scope.prdfont2;
		var num5=$scope.prdname2;
		var num6=$scope.prdprice;
		var num7=$scope.prdimgsrc;
		var num8=$scope.prddianpu;
		var num9=$scope.prdpingjia;
		$.post('/thinkphp3.2.3/index.php/Home/Index/xiudatabase',{
			id:$scope.id,
			prdprice:num6,
			prdname1:num1,
			prdname2:num5,
			prdi:num3,
			prdfont1:num2,
			prdfont2:num4,
			prdpingjia:num9,
			prddianpu:num8,
			prdimgsrc:num7
			
			
		},function(data) {
			
				alert(data);
			
			
		});
	}
	$scope.getval=function(){
		var num1=$scope.prdname1;
		var num2=$scope.prdfont1;
		var num3=$scope.prdi;
		var num4=$scope.prdfont2;
		var num5=$scope.prdname2;
		var num6=$scope.prdprice;
		var num7=$scope.prdimgsrc;
		var num8=$scope.prddianpu;
		var num9=$scope.prdpingjia;
		$.post('/thinkphp3.2.3/index.php/Home/Index/database',{
			prdprice:num6,
			prdname1:num1,
			prdname2:num5,
			prdi:num3,
			prdfont1:num2,
			prdfont2:num4,
			prdpingjia:num9,
			prddianpu:num8,
			prdimgsrc:num7
			
			
		},function(data) {
			
				alert(data);
			
			
		});
		
	}
	$scope.add=function(x){
		   var obj={id:16,prdprice:30,prdname:"李四"};
    $scope.categorie.push(obj);
	}
	$scope.ajadata();

});
