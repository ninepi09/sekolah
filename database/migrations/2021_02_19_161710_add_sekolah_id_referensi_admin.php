<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSekolahIdReferensiAdmin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('semesters', function (Blueprint $table) {
            $table->bigInteger('user_id')->unsigned()->after('id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::table('status_gurus', function (Blueprint $table) {
            $table->bigInteger('user_id')->unsigned()->after('id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::table('jenjang_pegawais', function (Blueprint $table) {
            $table->bigInteger('user_id')->unsigned()->after('id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::table('tingkatan_kelas', function (Blueprint $table) {
            $table->bigInteger('user_id')->unsigned()->after('id')->nullable();
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
        Schema::table('semesters', function (Blueprint $table) {
            //
        });

        Schema::table('status_gurus', function (Blueprint $table) {
            //
        });

        Schema::table('jenjang_pegawais', function (Blueprint $table) {
            //
        });

        Schema::table('tingkatan_kelas', function (Blueprint $table) {
            //
        });
    }
}
