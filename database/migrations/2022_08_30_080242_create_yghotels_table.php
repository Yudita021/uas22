<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateYghotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('yghotels', function (Blueprint $table) {
            $table->bigIncrements('id_kamar');
            $table->string('jenis_kamar', 10);
            $table->string('nama_kamar',50);
            $table->integer('jumlah_kamar');
            $table->integer('kapasitas');
            $table->integer('harga');
            $table->text('keterangan');
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
        Schema::dropIfExists('yghotels');
    }
}
