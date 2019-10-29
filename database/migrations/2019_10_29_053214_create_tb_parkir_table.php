<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbParkirTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_parkir', function (Blueprint $table) {
            $table->increments('id_parkir');
            $table->string('nama');
            $table->string('plat')->unique();
            $table->date('tanggal');
            $table->integer('harga');
            $table->string('merk');
            $table->integer('id_kendaraan');
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
        Schema::dropIfExists('tb_parkir');
    }
}
