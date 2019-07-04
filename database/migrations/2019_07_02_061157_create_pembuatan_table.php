<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePembuatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembuatan', function (Blueprint $table) {
            $table->Increments('id_pembuatan');
            $table->string('keterangan');
            $table->string('file');
            $table->string('status');
            $table->integer('id_pengguna')->unsigned();
            $table->foreign('id_pengguna')->references('id_pengguna')->on('pengguna')->onDelete('cascade');
            $table->integer('id_bahan')->unsigned();
            $table->foreign('id_bahan')->references('id_bahan')->on('bahan')->onDelete('cascade');
            $table->integer('id_sablon')->unsigned();
            $table->foreign('id_sablon')->references('id_sablon')->on('sablon')->onDelete('cascade');
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
        Schema::dropIfExists('pembuatan');
    }
}
