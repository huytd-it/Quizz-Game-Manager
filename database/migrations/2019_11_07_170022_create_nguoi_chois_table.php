<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNguoiChoisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nguoi_chois', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten_dang_nhap');
            $table->string('mat_khau');
            $table->string('email');
            $table->text('hinh_dai_dien');
            $table->integer('diem_cao_nhat');
            $table->integer('credit');
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
        Schema::dropIfExists('nguoi_chois');
    }
}
