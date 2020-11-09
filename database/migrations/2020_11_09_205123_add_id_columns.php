<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIdColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('admins', function (Blueprint $table) {
            $table->unsignedBigInteger('desa_id')->default(1)->after('id');
            $table->foreign('desa_id')->references('id')->on('desa')->onDelete('cascade');
        });
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('desa_id')->default(1)->after('id');
            $table->foreign('desa_id')->references('id')->on('desa')->onDelete('cascade');
        });
        Schema::table('news_category', function (Blueprint $table) {
            $table->unsignedBigInteger('desa_id')->default(1)->after('id');
            $table->foreign('desa_id')->references('id')->on('desa')->onDelete('cascade');
        });
        Schema::table('potency_category', function (Blueprint $table) {
            $table->unsignedBigInteger('desa_id')->default(1)->after('id');
            $table->foreign('desa_id')->references('id')->on('desa')->onDelete('cascade');
        });
        Schema::table('potency', function (Blueprint $table) {
            $table->unsignedBigInteger('desa_id')->default(1)->after('id');
            $table->foreign('desa_id')->references('id')->on('desa')->onDelete('cascade');
        });
        Schema::table('news', function (Blueprint $table) {
            $table->unsignedBigInteger('desa_id')->default(1)->after('id');
            $table->foreign('desa_id')->references('id')->on('desa')->onDelete('cascade');
        });
        Schema::table('product_categories', function (Blueprint $table) {
            $table->unsignedBigInteger('desa_id')->default(1)->after('id');
            $table->foreign('desa_id')->references('id')->on('desa')->onDelete('cascade');
        });
        Schema::table('products', function (Blueprint $table) {
            $table->unsignedBigInteger('desa_id')->default(1)->after('id');
            $table->foreign('desa_id')->references('id')->on('desa')->onDelete('cascade');
        });
        Schema::table('important_numbers', function (Blueprint $table) {
            $table->unsignedBigInteger('desa_id')->default(1)->after('id');
            $table->foreign('desa_id')->references('id')->on('desa')->onDelete('cascade');
        });
        Schema::table('surat_keterangan_usaha', function (Blueprint $table) {
            $table->unsignedBigInteger('desa_id')->default(1)->after('id');
            $table->foreign('desa_id')->references('id')->on('desa')->onDelete('cascade');
        });
        Schema::table('surat_keterangan_domisili', function (Blueprint $table) {
            $table->unsignedBigInteger('desa_id')->default(1)->after('id');
            $table->foreign('desa_id')->references('id')->on('desa')->onDelete('cascade');
        });
        Schema::table('surat_keterangan_tidak_mampu', function (Blueprint $table) {
            $table->unsignedBigInteger('desa_id')->default(1)->after('id');
            $table->foreign('desa_id')->references('id')->on('desa')->onDelete('cascade');
        });
        Schema::table('kegiatan', function (Blueprint $table) {
            $table->unsignedBigInteger('desa_id')->default(1)->after('id');
            $table->foreign('desa_id')->references('id')->on('desa')->onDelete('cascade');
        });
        Schema::table('pasar', function (Blueprint $table) {
            $table->unsignedBigInteger('desa_id')->default(1)->after('id');
            $table->foreign('desa_id')->references('id')->on('desa')->onDelete('cascade');
        });
        Schema::table('ojek', function (Blueprint $table) {
            $table->unsignedBigInteger('desa_id')->default(1)->after('id');
            $table->foreign('desa_id')->references('id')->on('desa')->onDelete('cascade');
        });
        Schema::table('jasa', function (Blueprint $table) {
            $table->unsignedBigInteger('desa_id')->default(1)->after('id');
            $table->foreign('desa_id')->references('id')->on('desa')->onDelete('cascade');
        });
        Schema::table('info_desas', function (Blueprint $table) {
            $table->unsignedBigInteger('desa_id')->default(1)->after('id');
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
        Schema::table('admins', function (Blueprint $table) {
            $table->dropColumn('desa_id');
        });
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('desa_id');
        });
        Schema::table('news_category', function (Blueprint $table) {
            $table->dropColumn('desa_id');
        });
        Schema::table('potency_category', function (Blueprint $table) {
            $table->dropColumn('desa_id');
        });
        Schema::table('potency', function (Blueprint $table) {
            $table->dropColumn('desa_id');
        });
        Schema::table('news', function (Blueprint $table) {
            $table->dropColumn('desa_id');
        });
        Schema::table('product_categories', function (Blueprint $table) {
            $table->dropColumn('desa_id');
        });
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('desa_id');
        });
        Schema::table('important_numbers', function (Blueprint $table) {
            $table->dropColumn('desa_id');
        });
        Schema::table('surat_keterangan_usaha', function (Blueprint $table) {
            $table->dropColumn('desa_id');
        });
        Schema::table('surat_keterangan_domisili', function (Blueprint $table) {
            $table->dropColumn('desa_id');
        });
        Schema::table('surat_keterangan_tidak_mampu', function (Blueprint $table) {
            $table->dropColumn('desa_id');
        });
        Schema::table('kegiatan', function (Blueprint $table) {
            $table->dropColumn('desa_id');
        });
        Schema::table('pasar', function (Blueprint $table) {
            $table->dropColumn('desa_id');
        });
        Schema::table('ojek', function (Blueprint $table) {
            $table->dropColumn('desa_id');
        });
        Schema::table('jasa', function (Blueprint $table) {
            $table->dropColumn('desa_id');
        });
        Schema::table('info_desas', function (Blueprint $table) {
            $table->dropColumn('desa_id');
        });
    }
}
