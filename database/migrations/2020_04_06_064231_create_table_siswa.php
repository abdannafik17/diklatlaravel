<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->increments('id_siswa');
            $table->string('nisn', 50);
            $table->longtext('nama_depan');
            $table->longtext('nama_akhir');
            $table->string('tempat_lahir', 100)->nullable();
            $table->date('tanggal_lahir');
            $table->enum('jenis_kelamin', ['L', 'P'])->default('L');
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
        Schema::dropIfExists('siswa');
    }
}
