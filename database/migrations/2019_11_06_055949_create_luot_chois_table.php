<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLuotChoisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('luot_chois', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nguoi_choi_id')->unsigned();
            $table->integer('so_cau');
            $table->string('diem');
            $table->string('ngay_gio');
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
        Schema::dropIfExists('luot_chois');
    }
}
