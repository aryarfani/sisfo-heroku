<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePotencyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('potency', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('potency_category_id');
            $table->string('title');
            $table->text('address');
            $table->string('image')->nullable();
            $table->timestamps();

            $table->foreign('potency_category_id')->references('id')->on('potency_category')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('potency');
    }
}
