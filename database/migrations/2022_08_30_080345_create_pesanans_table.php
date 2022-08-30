<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesanans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_kamar')->nullable();
            $table->unsignedBigInteger('id_pelanggan')->nullable();
            $table->date('checkin');
            $table->date('checkout');
            $table->integer('jumlah_kamar');
            $table->integer('jumlah_orang');
            $table->integer('total_harga');
            $table->string('pesan');
            $table->timestamps();
        });
        
        Schema::table('pesanans', function (Blueprint $table) {
            $table->foreign('id_kamar')
            ->references('id_kamar')
            ->on('yghotels')
            ->onDelete('cascade');

            $table->foreign('id_pelanggan')
            ->references('id_pelanggan')
            ->on('pelanggans')
            ->onDelete('cascade');

            
            $table->dropForeign(['id_kamar']);
            $table->dropForeign(['id_pelanggan']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pesanans');
    }
}
