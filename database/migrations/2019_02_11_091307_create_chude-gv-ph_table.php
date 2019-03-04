<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChudeGvPhTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ChuDe_GV_PH', function (Blueprint $table) {
            $table->char('cd_gvph_ma',8)->comment('Mã chủ đề');
            $table->string('cd_gvph_ten')->comment('Tên chủ đề');
        //khóa
            $table->primary(['cd_gvph_ma']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ChuDe_GV_PH');
    }
}
