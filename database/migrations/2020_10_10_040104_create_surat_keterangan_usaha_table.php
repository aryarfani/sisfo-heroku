<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratKeteranganUsahaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_keterangan_usaha', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->char('status_surat', 1)->comment('0: Menunggu, 1: Selesai, 2: Dibatalkan')->default(0);
            $table->string('jenis_surat');
            $table->string('nama');
            $table->char('jenis_kelamin', 1)->comment('1: Laki-Laki, 0: Perempuan');
            $table->string('ttl');
            $table->string('status');
            $table->string('alamat');
            $table->string('nama_usaha');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('surat_keterangan_usaha');
    }
}
