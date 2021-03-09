<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterJadwalPelajaranKelas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::transaction(function(){
            DB::table('jadwal_pelajarans')->truncate();
            Schema::table('jadwal_pelajarans', function(Blueprint $table){
                $table->unsignedBigInteger('kelas_id');
                $table->dropColumn('kelas');
            });
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
    }
}
