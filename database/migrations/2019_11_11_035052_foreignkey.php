<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Foreignkey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table("cau_hois",function(Blueprint $table){
            $table->foreign('id_linh_vuc')->references('id')->on('linh_vuc');
        });

        Schema::table("luot_chois",function(Blueprint $table){
            $table->foreign('nguoi_choi_id')->references('id')->on('nguoi_chois');
        });

        Schema::table("chi_tiet_luot_chois",function(Blueprint $table){
            $table->foreign('luoc_choi_id')->references('id')->on('luot_chois');
            $table->foreign('cau_hoi_id')->references('id')->on('cau_hois');
        });

        Schema::table("lich_su_mua_credits",function(Blueprint $table){
            $table->foreign('nguoi_choi_id')->references('id')->on('nguoi_chois');
            $table->foreign('goi_credit_id')->references('id')->on('goi_credit');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    }
}
