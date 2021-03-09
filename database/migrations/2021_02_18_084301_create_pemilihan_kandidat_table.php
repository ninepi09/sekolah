<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemilihanKandidatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemilihan_kandidats', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('calon_kandidat_id');
            $table->string('posisi');
            $table->string('pemilihan');
            $table->date('start_date');
            $table->date('end_date');
            $table->softDeletes();
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
        Schema::dropIfExists('pemilihan_kandidat');
    }
}
