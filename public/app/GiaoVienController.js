app.controller('GiaoVienController',function($scope,$http,URL_Main){
	$http.get(URL_Main + 'giao-vien/').then(function(response){
		$scope.ds_giaoVien = response.data.message.ds_GiaoVien;
		// console.log(response.data.message.ds_GiaoVien);
	});

	$http.get(URL_Main + 'to-cm/').then(function(response){
		$scope.ds_toCM = response.data.message.ds_ToCM;
	});

	$scope.modal = function(state,gv_ma){
		$scope.state  = state;
		
		switch(state){
			case "add":
				$scope.frmTitle = "Thêm giáo viên";
				break;
			case "edit":
				$scope.readOnly='true';
				$scope.frmTitle = "Sửa giáo viên";
				$scope.gv_ma = gv_ma;
				$http.get(URL_Main + 'giao-vien/' + gv_ma).then(function(response){
					$scope.giaovien = response.data.message.gv;
					var ns = response.data.message.gv.gv_ngaySinh.toString();
					$scope.giaovien.gv_ngaySinh = new Date(ns);
				});
				break;
		}
		$('#myModal').modal('show');
		$scope.passError = false;
		$scope.compare = function() {
			if (angular.equals($scope.giaovien.gv_matKhau, $scope.giaovien.gv_matKhau_repeat)) {
				$scope.passError = false;
			} 
			else {
				$scope.passError = true;
			}
		}
	}

	$scope.save = function(state,gv_ma) {
		switch(state){
			case "add":
				var data = $.param($scope.giaovien);
				$http({
				  	method: 'POST',
				  	url: URL_Main + 'giao-vien',
				  	data: data,
				  	headers: {'Content-Type' : 'application/x-www-form-urlencoded'}
				  	}).then(function(response) {
							location.reload();
					  }, function (error) {
					    console.log(error);
					  }); 
					break;
			case "edit":
				var data = $.param($scope.giaovien);
				$http({
				  	method: 'PUT',
				  	url: URL_Main + 'giao-vien/' + gv_ma,
				  	data: data,
				  	headers: {'Content-Type' : 'application/x-www-form-urlencoded'}
				  	}).then(function(response) {
							location.reload();
					  	}, function (error) {
					    console.log(error);
					  	}); 
					break;
		}
	}

	$scope.confirmDelete = function(gv_ma) {
		if(confirm('Bạn có chắc muốn xóa không ?')){
			$http.delete(URL_Main + 'giao-vien/' + gv_ma).
				then(function (response) {
					location.reload();
				},function (error) {
					console.log(error);
				});
		}
	}


});