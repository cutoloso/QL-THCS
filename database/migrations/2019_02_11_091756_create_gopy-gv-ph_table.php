<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGopyGvPhTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('GopY_GV_PH', function (Blueprint $table) {
            $table->char('cd_gvph_ma',8)->comment('Mã chủ đề');
            $table->timestamp('gy_gvph_tGian')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời gian đưa ra góp ý');
            $table->text('gy_gvph_noiDung')->comment('Nội dung góp ý');
        //khóa
            $table->primary(['gy_gvph_tGian','cd_gvph_ma']);
            $table->foreign('cd_gvph_ma')->references('cd_gvph_ma')->on('ChuDe_GV_PH')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('GopY_GV_PH');
    }
}
