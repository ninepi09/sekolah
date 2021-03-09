<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Superadmin\Sekolah;
use App\User;

class AddSekolahIdInTingkatanKelas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $sekolah = Sekolah::find(1);
        if(!$sekolah) {
            $sekolah = new Sekolah();
            $sekolah->id = 1;
            $sekolah->id_sekolah = '0001';
            $sekolah->name = 'SMA NEGERI 1 MEDAN';
            $sekolah->alamat = 'MEDAN';
            $sekolah->jenjang = 'SMA';
            $sekolah->provinsi = '';
            $sekolah->kabupaten = '';
            $sekolah->tahun_ajaran = '2020/2021';
            $sekolah->save();
        }

        $user = User::where('username', 'admin')->first();
        if($user && !$user->id_sekolah) {
            $user->id_sekolah = 1;
            $user->save();
        }

        Schema::table('tingkatan_kelas', function (Blueprint $table) {
            $table->unsignedBigInteger('sekolah_id')->default(1);
        });

        Schema::table('mata_pelajarans', function (Blueprint $table) {
            $table->unsignedBigInteger('sekolah_id')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tingkatan_kelas', function (Blueprint $table) {
            $table->dropColumn('sekolah_id');
        });

        Schema::table('mata_pelajaran', function (Blueprint $table) {
            $table->dropColumn('sekolah_id');
        });
    }
}
