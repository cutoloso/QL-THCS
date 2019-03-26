app.controller('UpFileController',function($scope,$http,URL_Main){
	$scope.sub = function(event){
		if($("#myFile").val() != ""){
			$.ajax({
				url: "http://localhost/QL-THCS/public/test",
				method: "POST",
				data:new FormData(this),
				dataType: 'JSON',
				contentType: false,
				cache: false,
				processData: false,
				success: function(response)
				{

					location.reload();
					alert("Thêm s?n ph?m thành công");
              //Xóa du?ng d?n dã thêm vào input
              $("#myFile").val('').clone(true);
              $("#myFiles").val('').clone(true);
              
            },
            error: function(response)
            {
            	console.log(response);
            	alert("Có l?i c?p nh?t s?n ph?m");
            }

          });
		}
		else
		{

		}
	}
});