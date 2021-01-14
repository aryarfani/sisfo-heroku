<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNomorAdminDesaFromInfoDesas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('info_desas', function (Blueprint $table) {
            $table->string('nomor_admin_desa')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('info_desas', function (Blueprint $table) {
            $table->dropColumn('nomor_admin_desa');
        });
    }
}
