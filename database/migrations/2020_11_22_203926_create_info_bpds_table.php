<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfoBpdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info_bpds', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('desa_id');

            $table->string('ketua');
            $table->string('sekretaris');
            $table->string('wakil');
            $table->string('anggota1')->nullable();
            $table->string('anggota2')->nullable();
            $table->string('anggota3')->nullable();
            $table->string('anggota4')->nullable();
            $table->string('anggota5')->nullable();

            $table->timestamps();
            $table->foreign('desa_id')->references('id')->on('desa')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('info_bpds');
    }
}
