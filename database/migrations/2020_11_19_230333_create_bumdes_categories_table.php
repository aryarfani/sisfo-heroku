<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBumdesCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bumdes_categories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('desa_id');

            $table->string('name');
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
        Schema::dropIfExists('bumdes_categories');
    }
}
