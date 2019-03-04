<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHocsinhTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('HocSinh', function (Blueprint $table) {
            $table->char('hs_ma',8)->comment('Mã học sinh');
            $table->string('hs_matKhau',32)->comment('Mật khẩu đăng nhập');
            $table->string('hs_hoTen',100)->comment('Họ tên học sinh');
            $table->date('hs_ngaySinh')->comment('Ngày sinh học sinh');
            $table->boolean('hs_phai')->comment('hsái: 1: Nam - 0: Nu')->default(1);
            $table->string('hs_diaChi')->comment('Địa chỉ học sinh');
            $table->string('hs_HTCha')->comment('Họ tên cha học sinh');
            $table->string('hs_HTMe')->comment('Họ tên Mẹ học sinh');
            $table->char('q_ma',8)->comment('Mã quyền');
            $table->char('l_ma',8)->comment('Mã lớp');
            // $table->timestamp('hs_taoMoi')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm tạo mới');

            // $table->timestamp('hs_capnhat')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm cập nhật gần nhất');
        // khóa
            $table->primary(['hs_ma']);
            
            $table->foreign('q_ma')->references('q_ma')->on('Quyen')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('l_ma')->references('l_ma')->on('Lop')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('HocSinh');
    }
}
