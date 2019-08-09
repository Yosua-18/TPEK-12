<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTBuyer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_buyer', function (Blueprint $table) {
            $table->increments('id');
            $table->String('nama');
            $table->String('alamat_pelanggan');
            $table->String('no_telp_pelanggan');
            $table->String('kode_pos_buyer');
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
        Schema::dropIfExists('t_buyer');
    }
}
