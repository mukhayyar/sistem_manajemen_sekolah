<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Siswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->id('NISN');
            $table->string('nama');
            $table->unsignedBigInteger('kd_kelas');
            $table->foreign('kd_kelas')->on('kelas')->references('kd_kelas');
            $table->string('ttl');
            $table->string('asrama');
            $table->string('jenis_kelamin');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
