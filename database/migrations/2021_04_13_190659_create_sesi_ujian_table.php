<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSesiUjianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sesi_ujian', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('peraturan_id');
            $table->date('tgl');
            $table->time('jam');
            $table->unsignedBigInteger('id_soal_1');
            $table->unsignedBigInteger('id_soal_2');
            $table->unsignedBigInteger('id_soal_3');
            $table->unsignedBigInteger('id_soal_4');
            $table->unsignedBigInteger('id_soal_5');
            $table->unsignedBigInteger('id_soal_6');
            $table->unsignedBigInteger('id_soal_7');
            $table->unsignedBigInteger('id_soal_8');
            $table->unsignedBigInteger('id_soal_9');
            $table->unsignedBigInteger('id_soal_10');
            $table->unsignedBigInteger('id_soal_11');
            $table->unsignedBigInteger('id_soal_12');
            $table->unsignedBigInteger('id_soal_13');
            $table->unsignedBigInteger('id_soal_14');
            $table->unsignedBigInteger('id_soal_15');
            $table->unsignedBigInteger('id_soal_16');
            $table->unsignedBigInteger('id_soal_17');
            $table->unsignedBigInteger('id_soal_18');
            $table->unsignedBigInteger('id_soal_19');
            $table->unsignedBigInteger('id_soal_20');
            $table->integer('nilai')->nullable();
            $table->timestamps();


            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('peraturan_id')->references('id')->on('peraturan');
            $table->foreign('id_soal_1')->references('id')->on('bank_soal');
            $table->foreign('id_soal_2')->references('id')->on('bank_soal');
            $table->foreign('id_soal_3')->references('id')->on('bank_soal');
            $table->foreign('id_soal_4')->references('id')->on('bank_soal');
            $table->foreign('id_soal_5')->references('id')->on('bank_soal');
            $table->foreign('id_soal_6')->references('id')->on('bank_soal');
            $table->foreign('id_soal_7')->references('id')->on('bank_soal');
            $table->foreign('id_soal_8')->references('id')->on('bank_soal');
            $table->foreign('id_soal_9')->references('id')->on('bank_soal');
            $table->foreign('id_soal_10')->references('id')->on('bank_soal');
            $table->foreign('id_soal_11')->references('id')->on('bank_soal');
            $table->foreign('id_soal_12')->references('id')->on('bank_soal');
            $table->foreign('id_soal_13')->references('id')->on('bank_soal');
            $table->foreign('id_soal_14')->references('id')->on('bank_soal');
            $table->foreign('id_soal_15')->references('id')->on('bank_soal');
            $table->foreign('id_soal_16')->references('id')->on('bank_soal');
            $table->foreign('id_soal_17')->references('id')->on('bank_soal');
            $table->foreign('id_soal_18')->references('id')->on('bank_soal');
            $table->foreign('id_soal_19')->references('id')->on('bank_soal');
            $table->foreign('id_soal_20')->references('id')->on('bank_soal');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sesi_ujian');
    }
}
