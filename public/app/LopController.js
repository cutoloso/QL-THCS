app.controller('LopController',function($scope,$http,URL_Main){
	// $scope.khoi = '6';
	// $scope.maKhoaHoc = '2016';
	// fillKhoaHoc();
	var d = new Date();
	var yearNow = d.getFullYear();
	function fillLop() {
		switch ($scope.khoi) {
			case '9':
			$scope.maKhoaHoc = yearNow-3;
			break;
			case '8':
			$scope.maKhoaHoc = yearNow-2;
			break;
			case '7':
			$scope.maKhoaHoc = yearNow-1;
			break;
			case '6':
			$scope.maKhoaHoc = yearNow;
			break;
		}
		$http.get(URL_Main + 'lop/'+ $scope.maKhoaHoc +'/khoa-hoc').then(function(response){
			$scope.ds_lop = response.data.message.ds_Lop;
		});
	}
	// $scope.lop = {
	// 				'kh_khoaHoc': $scope.maKhoaHoc,
	// 				'khoi':$scope.khoi
	// 			};

	// $http.get(URL_Main + 'khoa-hoc/').then(function(response){
	// 	$scope.ds_kh = response.data.message.ds_KhoaHoc;
	// });

	// function fillData() {
	// 	$http.get(URL_Main + 'lop/'+ $scope.maKhoaHoc +'/khoa-hoc').then(function(response){
	// 		$scope.ds_lop = response.data.message.ds_Lop;
	// 	});
	// }
	// fillData();
// cập nhật lại bảng
	$scope.reLoadPage = function() {
		// $scope.maKhoaHoc = $scope.lop.kh_khoaHoc;
		// $scope.khoi = $scope.khoi;
		// fillData();
		console.log("reLoadData");
		if (typeof $scope.khoi != "undefined") {
			fillLop();
		// if (typeof $scope.lop.l_ma != "undefined") {
		// 	$scope.maLop = $scope.lop.l_ma;
		// 		fillData();
		// 		console.log('kh: '+$scope.maKhoaHoc+' lop:'+ $scope.maLop)
		// }
		}
	}

// Sắp xếp mã tăng dần hoặc giảm dần
	$scope.sortExpression = 'l_ma';
	$scope.sortReverse = false;
	$scope.sort = function() {
		$scope.sortReverse = !$scope.sortReverse;
	}
// form thêm & sửa 
	$scope.modal = function(state, l_ma, kh_khoaHoc, p_ma, gv_ma){
		$scope.state  = state;
		$http.get(URL_Main + 'giao-vien/').then(function(response){
			$scope.ds_gv = response.data.message.ds_GiaoVien;
		});
		$http.get(URL_Main + 'phong/').then(function(response){
			$scope.ds_p = response.data.message.ds_Phong;
		});
		switch(state){
			case "add":
				$scope.frmTitle = "Thêm lớp";
				$scope.readOnly=false;
				$scope.lop = {
					'l_ma':'',
					'kh_khoaHoc': $scope.maKhoaHoc,
					'p_ma':'',
					'gv_ma':''
				};
				break;
			case "edit":
				$scope.readOnly=true;
				$scope.frmTitle = "Sửa lớp";
				$scope.lop.l_ma = l_ma;
				$scope.lop.kh_khoaHoc = kh_khoaHoc;
				$scope.lop.p_ma = p_ma;
				$scope.lop.gv_ma = gv_ma;
				// $http.get(URL_Main + 'lop/' + l_ma).then(function(response){
				// 	$scope.lop = response.data.message.lop;
				// });
				break;
		}
		// Hiện form
		$("#myModal").modal('show');

	}
});