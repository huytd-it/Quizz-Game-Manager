<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCauHoisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cau_hois', function (Blueprint $table) {
            $table->increments('id');
            $table->string('noi_dung');
            $table->integer('id_linh_vuc')->unsigned();
            $table->string('phuong_an_A');
            $table->string('phuong_an_B');
            $table->string('phuong_an_C');
            $table->string('phuong_an_D');
            $table->string('dap_an');
            $table->boolean('trang_thai')->default(1);
            $table->softDeletes();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cau_hois');
    }
}
