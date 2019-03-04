@extends('layouts.master')
@section('head.css')
<style>
	table {
	  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	  border-collapse: collapse;
	  width: 100%;
	}

	table td, table th {
	  border: 1px solid #ddd;
	  padding: 5px;
	}

	table tr:nth-child(even){background-color: #f2f2f2;}

	table tr:hover {background-color: #ddd;}

	table th {
	  padding-top: 8px;
	  padding-bottom: 8px;
	  text-align: left;
	  background-color: #4CAF50;
	  color: white;
	}

	i{
		color: #333;
	}

	.form-group span{
		color: red;
	}
</style>
@endsection
@section('body.title','Danh sách giáo viên')
@section('body.content')
<div ng-controller="GiaoVienController">
	<table>
	  <tr>
	    <th>Mã</th>
	    <th>Họ tên</th>
	    <th>Ngày sinh</th>
	    <th>Phái</th>
	    <th>Địa chỉ</th>
	    <th>Email</th>
	    <th>Điện thoại</th>
	    <th>Mã chuyên môn</th>
	    <th colspan="2" class="text-center">
	    	<a href=""  ng-click="modal('add')" ><i class="fas fa-user-plus" ></i></a>
	    </th>
	  </tr>
	  <tr ng-repeat="gv in ds_giaoVien | orderBy : 'cm_ma'">
	    <td><% gv.gv_ma %></td>
	    <td><% gv.gv_hoTen %></td>
	    <td><% gv.gv_ngaySinh %></td>
	    <td><% gv.gv_phai %></td>
	    <td><% gv.gv_diaChi %></td>
	    <td><% gv.gv_email %></td>
	    <td><% gv.gv_dienThoai %></td>
	    <td><% gv.cm_ma %></td>
	    <td>
	    	<a href="" ng-click="modal('edit')" ><i class="fas fa-user-edit"></i></a>
	    </td>
	    <td>
	    	<a href=""><i class="fas fa-user-minus"></i></a>
	    </td> 
	  </tr>
	</table>

	<!-- The Modal -->
	<div class="modal fade" id="myModal">
	  <div class="modal-dialog">
	    <div class="modal-content">

	      	<!-- Modal Header -->
	      	<div class="modal-header">
	        	<h4 class="modal-title"><% frmTitle %></h4>
	        	<button type="button" class="close" data-dismiss="modal">&times;</button>
	      	</div>

	      	<form action="" name="frmGiaoVien">
	      	<!-- Modal body -->
	      		<div class="modal-body">

		         	<div class="form-group">
		         		<label for="gv_ma">Mã:</label>
		         		<input type="text" class="form-control" id="gv_ma" name="gv_ma" placeholder="" ng-model="giaovien.gv_ma" required="true" ng-maxlength="8">
		         		<span class="text-danger" ng-show="frmGiaoVien.gv_ma.$error.required">Bạn chưa nhập mã</span>
		         		<span class="text-danger" ng-show="frmGiaoVien.gv_ma.$error.maxlength">Mã không hợp lệ</span>
		         	</div>
		         	<div class="form-group">
		         		<label for="gv_hoTen">Họ tên:</label>
		         		<input type="text" class="form-control" id="gv_hoTen" name="gv_hoTen" placeholder="" ng-model="giaovien.gv_hoTen" required="true" ng-maxlength="100">
		         		<span class="text-danger" ng-show="frmGiaoVien.gv_hoTen.$error.required">Bạn chưa nhập họ tên</span>
		         	</div>
		         	<div class="form-group">
		         		<label for="gv_ngaySinh">Ngày sinh:</label>
		         		<input type="date" class="form-control" id="gv_ngaySinh" name="gv_ngaySinh" placeholder="" ng-model="giaovien.gv_ngaySinh">
		         	</div>
		         	<div class="form-group">
		         		<label for="gv_phai">Phái:</label>
		         		<select name="gv_phai" id="gv_phai">
		         			<option value="0">Nữ</option>
		         			<option value="1">Nam</option>
		         		</select>
		         	</div>
		         	<div class="form-group">
		         		<label for="gv_diaChi">Địa chỉ:</label>
		         		<input type="text" class="form-control" id="gv_diaChi"  name="gv_diaChi" placeholder="" ng-model="giaovien.gv_diaChi" required="true">
		         		<span class="text-danger" ng-show="frmGiaoVien.gv_diaChi.$error.required">Bạn chưa nhập địa chỉ</span>
		         	</div>
		         	<div class="form-group">
		         		<label for="gv_email">Địa chỉ email:</label>
		         		<input type="email" class="form-control" id="gv_email" name="gv_email" placeholder="" ng-model="giaovien.gv_email" required="true">
		         		<span class="text-danger" ng-show="frmGiaoVien.gv_email.$error.required">Bạn chưa nhập email</span>
		         		<span class="text-danger" ng-show="frmGiaoVien.gv_email.$error.email">Email không hợp lệ</span>         		
		         	</div>
		         	<div class="form-group">
		         		<label for="gv_matKhau">Mật khẩu:</label>
		         		<input type="password" class="form-control" id="gv_matKhau" name="gv_matKhau" placeholder="" ng-model="giaovien.gv_matKhau" ng-maxlength="32">
		         		<span class="text-danger" ng-show="frmGiaoVien.gv_matKhau.$error.maxlength">Mật khẩu không hợp lệ</span>
		         	</div>
		         	<div class="form-group">
		         		<label for="gv_matKhau_repeat">Nhập lại mật khẩu:</label>
		         		<input type="password" class="form-control" id="gv_matKhau_repeat" name="gv_matKhau_repeat" placeholder="" ng-model="giaovien.gv_matKhau_repeat" ng-maxlength="32">
		         		<span class="text-danger" ng-show="frmGiaoVien.gv_matKhau_repeat == frmGiaoVien.gv_matKhau">Mật khẩu không hợp lệ</span>
		         	</div>

		         	<div class="form-group">
		         		<label for="gv_dienThoai">Điện thoại:</label>
		         		<input type="text" class="form-control" id="gv_dienThoai" name="gv_dienThoai" placeholder="" ng-model="giaovien.gv_dienThoai" ng-maxlength="11">
		         		<span class="text-danger" ng-show="frmGiaoVien.gv_dienThoai.$error.maxlength">Số điện thoại không hợp lệ</span>
		         	</div>
		         	<div class="form-group">
		         		<label for="cm_ma">Mã chuyên môn:</label>
		         		<select name="cm_ma" id="cm_ma">
		         			<option value="<% cm.cm_ma %>" ng-repeat="cm in ds_toCM"><% cm.cm_moTa %></option>
		         		</select>
		         	</div>
		        
	      		</div>

	      		<!-- Modal footer -->
	      		<div class="modal-footer" >
		        	<button type="button" class="btn btn-primary" data-dismiss="modal" ng-disabled="frmGiaoVien.$invalid" ng-click="save(state)">Lưu</button>
		      	</div>
			</form>
	      	
	    </div>
	  </div>
	</div>
</div>
@endsection
