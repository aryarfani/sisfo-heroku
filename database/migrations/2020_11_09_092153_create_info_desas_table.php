<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfoDesasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info_desas', function (Blueprint $table) {
            $table->id();
            $table->string('kepala_desa');
            $table->string('gambar_kepala_desa');
            $table->string('alamat_kepala_desa');
            $table->string('sekretaris');
            $table->string('kaur_keuangan');
            $table->string('kaur_umum');
            $table->string('kaur_perencanaan');
            $table->string('seksi_pelayanan');
            $table->string('seksi_kesejahteraan');
            $table->string('seksi_pemerintahan');
            $table->string('nomor_bpd');
            $table->string('nomor_pemdes');
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
        Schema::dropIfExists('info_desas');
    }
}
