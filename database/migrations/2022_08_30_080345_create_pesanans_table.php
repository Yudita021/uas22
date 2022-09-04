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
            $table->date('checkin');
            $table->date('checkout');
            $table->integer('jumlah_kamar');
            $table->integer('jumlah_orang');
            $table->integer('total_harga');
            $table->string('pesan');
            $table->string('id_pelanggan');
            $table->string('nama', 50);
            $table->string('no_hp', 20);
            $table->string('email', 50);
            $table->text('alamat');
            $table->timestamps();
        });
        
        Schema::table('pesanans', function (Blueprint $table) {
            $table->foreign('id_kamar')
            ->references('id')
            ->on('yghotels')
            ->onDelete('cascade');              
            $table->dropForeign(['id_kamar']);
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
