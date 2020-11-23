<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdukHukumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produk_hukums', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('desa_id');

            $table->string('uraian');
            $table->integer('tahun');
            $table->string('tentang');
            $table->string('pdf')->nullable();
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
        Schema::dropIfExists('produk_hukums');
    }
}
