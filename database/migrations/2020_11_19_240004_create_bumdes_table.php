<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBumdesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bumdes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('desa_id');
            $table->unsignedBigInteger('bumdes_category_id');

            $table->string('name');
            $table->string('image');
            $table->string('phone');
            $table->timestamps();

            $table->foreign('bumdes_category_id')->references('id')->on('bumdes_categories')->onDelete('cascade');
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
        Schema::dropIfExists('bumdes');
    }
}
