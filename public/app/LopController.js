app.controller('LopController',function($scope,$http,URL_Main){
	$scope.khoi = '6';
	$scope.maKhoaHoc = '2016';

	$scope.lop = {
					'kh_khoaHoc': $scope.maKhoaHoc,
					'khoi':$scope.khoi
				};

	$http.get(URL_Main + 'khoa-hoc/').then(function(response){
		$scope.ds_kh = response.data.message.ds_KhoaHoc;
	});

	function fillData() {
		$http.get(URL_Main + 'lop/'+ $scope.maKhoaHoc +'/khoa-hoc/'+ $scope.khoi+'/khoi').then(function(response){
			$scope.ds_lop = response.data.message.ds_Lop;
		});
	}
	fillData();
// cập nhật lại bảng
	$scope.reLoadPage = function() {
		$scope.maKhoaHoc = $scope.lop.kh_khoaHoc;
		$scope.khoi = $scope.lop.khoi;
		fillData();
		console.log("reLoadData");
	}

// Sắp xếp mã tăng dần hoặc giảm dần
	$scope.sortExpression = 'l_ma';
	$scope.sortReverse = false;
	$scope.sort = function() {
		$scope.sortReverse = !$scope.sortReverse;
	}
// form thêm & sửa 
	$scope.modal = function(state,hs_ma){
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
				$scope.hocsinh = {
					'l_ma':'',
					'kh_khoaHoc': $scope.maKhoaHoc,
					'p_ma':'',
					'gv_ma':''
				};
				break;
			case "edit":
				$scope.readOnly=true;
				$scope.frmTitle = "Sửa lớp";
				$scope.hs_ma = hs_ma;
				$http.get(URL_Main + 'lop/' + l_ma).then(function(response){
					$scope.lop = response.data.message.lop;
				});
				break;
		}
		// Hiện form
		$("#myModal").modal('show');

	}
});