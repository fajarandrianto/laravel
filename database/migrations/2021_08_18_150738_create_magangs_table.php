<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMagangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('magangs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('nis');
            $table->text('nama');
            $table->text('jurusan');
            $table->string('asal_sekolah');
            $table->string('jenis_kelamin',1);
            $table->integer('telp_siswa');
            $table->text('napem');
            $table->integer('telp_pem');
            $table->date('mulai');
            $table->date('akhir');
            $table->string('divisi',1);
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
        Schema::dropIfExists('magangs');
    }
}
