<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftars', function (Blueprint $table) {
            $table->id();
            $table->string('nik');
            $table->string('nama');
            $table->string('jeniskelamin');
            $table->string('tempatlahir');
            $table->dateTime('tanggallahir');
            $table->text('alamat');
            $table->string('lokasi');
            $table->string('vaksin');
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
        Schema::dropIfExists('pendaftars');
    }
}