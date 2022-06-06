<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBankSoalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bank_soal', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('peraturan_id');
            $table->string('soal');
            $table->string('pil_A');
            $table->string('pil_B');
            $table->string('pil_C');
            $table->string('pil_D');
            $table->string('pil_E');
            $table->string('kunci');
            $table->timestamps();

            $table->foreign('peraturan_id')->references('id')->on('peraturan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bank_soal');
    }
}
