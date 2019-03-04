<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTkbTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TKB', function (Blueprint $table) {
            $table->char('mh_ma',8)->comment('Mã môn học');
            $table->unsignedTinyInteger('th_stt')->comment('Số thứ tự tiết học');
            $table->string('th_buoi')->comment('Buổi học (Sáng - Chiều) của tiết học');
            $table->string('t_thu')->comment('Thứ trong một tuần');
            $table->char('l_ma',8)->comment('Mã lớp');
            $table->string('hk_hocKy')->comment('Học kỳ trong năm học');
            $table->string('hk_namHoc')->comment('Năm học');
            // khóa
            $table->primary(['mh_ma','th_stt','th_buoi','t_thu','l_ma','hk_hocKy','hk_namHoc']);
            
            $table->foreign('mh_ma')->references('mh_ma')->on('MonHoc')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign(['th_stt','th_buoi'])->references(['th_stt','th_buoi'])->on('TietHoc')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('t_thu')->references('t_thu')->on('Thu')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('l_ma')->references('l_ma')->on('Lop')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('hk_hocKy')->references('hk_hocKy')->on('HocKy')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign(['hk_hocKy','hk_namHoc'])->references(['hk_hocKy','hk_namHoc'])->on('HocKy')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('TKB');
    }
}
