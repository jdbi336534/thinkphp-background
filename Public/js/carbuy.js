var app = angular.module("myApp", []);

app.controller("myCtrl", function($scope, $http) {
	$scope.alltotal = 0;
	$scope.len=0;
	$scope.have = false;
	$scope.nohave = true;
	$scope.manyjia = function(index) {
		$scope.itemcar[index].quality += 1;
		$scope.itemcar[index].total = $scope.itemcar[index].prdprice * $scope.itemcar[index].quality;
		$scope.itemcar[index].total = $scope.itemcar[index].total.toFixed(2);

	}
	$scope.manyjian = function(index) {
		$scope.itemcar[index].quality -= 1;
		if($scope.itemcar[index].quality <= 1) {
			$scope.itemcar[index].quality = 1;
		}
		$scope.itemcar[index].total = $scope.itemcar[index].prdprice * $scope.itemcar[index].quality;
		$scope.itemcar[index].total = $scope.itemcar[index].total.toFixed(2);

	}
	$scope.delthis = function(id, index) {
		//alert(id+"---"+index);
		$http.get('/thinkphp3.2.3/index.php/Home/Index/delreadlistid?dellistid=' + id).success(function(data) {
			alert(data);
		})
		$scope.itemcar.splice(index, 1);
	}
	$scope.caltotal = function() {

		
	for(var j = 0; j < $scope.itemcar.length; j++) {
			$scope.alltotal += $scope.itemcar[j].total;
}
	$scope.len=$scope.itemcar.length;
	}
	$scope.start = function() {
		$http.get('/thinkphp3.2.3/index.php/Home/Index/readlistid').success(function(data) {
			if(data) {
				//console.log(data.length);
				$scope.listid = data;
				$http.get('/thinkphp3.2.3/index.php/Home/Index/readlist').success(function(data) {
					var usedate = [];
					//console.log($scope.listid[0].listid);
					for(var k = 0; k < $scope.listid.length; k++) {
						for(var j = 0; j < data.length; j++) {
							if($scope.listid[k].listid == data[j].id) {
								data[j].quality = 1;
								usedate.push(data[j]);
							}
						}

					}
					//				console.log(usedate);
					$scope.itemcar = usedate;
					$scope.alltotal = 0;
					if($scope.itemcar.length > 0) {
						$scope.have = true;
						$scope.nohave = false;

						for(var i = 0; i < $scope.itemcar.length; i++) {
							$scope.itemcar[i].total = $scope.itemcar[i].prdprice * $scope.itemcar[i].quality;
						}
						console.log($scope.itemcar);
						//				$scope.many=$scope.itemcar[0].quality;
					} else {
						

					}

				})

			}

		})
	}

	$scope.start();
	

});