<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhuhuynhTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PhuHuynh', function (Blueprint $table) {
            $table->char('ph_ma',8)->comment('Mã quản trị viên');
            $table->string('ph_matKhau',32)->comment('Mật khẩu đăng nhập');
            $table->string('ph_hoTen',100)->comment('Họ tên quản trị viên');
            $table->date('ph_ngaySinh')->comment('Ngày sinh quản trị viên');
            $table->boolean('ph_phai')->comment('phái: 1: Nam - 0: Nu')->default(1);
            $table->string('ph_diaChi')->comment('Địa chỉ quản trị viên');
            $table->string('ph_email')->comment('Email quản trị viên');
            $table->string('ph_dienThoai',10)->comment('Số điện thoại liên lạc');
            $table->char('q_ma',8)->comment('Mã quyền');
            // $table->timestamp('ph_taoMoi')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm tạo mới');

            // $table->timestamp('ph_capnhat')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm cập nhật gần nhất');
        // khóa
            $table->primary(['ph_ma']);
            
            $table->foreign('q_ma')->references('q_ma')->on('Quyen')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('PhuHuynh');
    }
}
