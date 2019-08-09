<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTKemejaPanjang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_kemeja_panjang', function (Blueprint $table) {
            $table->increments('id');
            $table->String('nama_kemeja_panjang');
            $table->String('model_produk');
            $table->String('color');
            $table->String('ukuran');
            $table->String('stock');
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
        Schema::dropIfExists('t_kemeja_panjang');
    }
}
