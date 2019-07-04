<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->Increments('id_barang');
            $table->string('nama');
            $table->string('brand');
            $table->string('deskripsi');
            $table->string('harga');
            $table->string('quantity');
            $table->string('status');
            $table->integer('id_jenis')->unsigned();
            $table->foreign('id_jenis')->references('id_jenis')->on('jenis_barang')->onDelete('cascade');

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
        Schema::dropIfExists('barang');
    }
}
