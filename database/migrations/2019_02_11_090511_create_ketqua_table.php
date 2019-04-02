<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKetquaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('KetQua', function (Blueprint $table) {
            $table->char('hs_ma',8)->comment('Mã học sinh');
            $table->string('hk_hocKy')->comment('Học kỳ trong năm học');
            $table->string('hk_namHoc')->comment('Năm học');
            $table->char('mh_ma',6)->comment('Mã môn học');
            $table->unsignedTinyInteger('kq_lan')->default(1)->comment('Kết quả lần');
            $table->float('kq_Diem',2,2)->comment('Diểm số');

            // khóa
            $table->primary(['hs_ma','hk_hocKy','hk_namHoc','mh_ma','kq_lan']);
            
            $table->foreign('hs_ma')->references('hs_ma')->on('HocSinh')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign(['hk_hocKy','hk_namHoc'])->references(['hk_hocKy','hk_namHoc'])->on('HocKy')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('mh_ma')->references('mh_ma')->on('MonHoc')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('KetQua');
    }
}
