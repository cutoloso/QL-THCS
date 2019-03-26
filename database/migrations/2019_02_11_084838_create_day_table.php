<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDayTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Day', function (Blueprint $table) {
            $table->char('mh_ma',3)->comment('Mã môn học');
            $table->char('l_ma',3)->comment('Mã lớp');
            $table->string('kh_khoaHoc')->comment('Niên khóa');
            $table->char('gv_ma',8)->comment('Mã giáo viên');
            // khóa
            $table->primary(['mh_ma','l_ma','kh_khoaHoc']);
            
            $table->foreign('mh_ma')->references('mh_ma')->on('MonHoc')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('l_ma')->references('l_ma')->on('Lop')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('kh_khoaHoc')->references('kh_khoaHoc')->on('Lop')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('gv_ma')->references('gv_ma')->on('GiaoVien')->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Day');
    }
}
