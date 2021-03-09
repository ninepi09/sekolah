<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class ChangeFkTipeBecomeKategoriToLibraries extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('libraries', function (Blueprint $table) {
            DB::statement("ALTER TABLE `libraries` DROP FOREIGN KEY `libraries_kategori_id_foreign`;");
            DB::statement("ALTER TABLE `libraries` ADD CONSTRAINT `libraries_kategori_id_foreign` FOREIGN KEY (`kategori_id`) REFERENCES `kategoris`(`id`) ON DELETE CASCADE ON UPDATE RESTRICT;");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('libraries', function (Blueprint $table) {
            DB::statement("ALTER TABLE `libraries` DROP FOREIGN KEY `libraries_kategori_id_foreign`;");
            DB::statement("ALTER TABLE `libraries` ADD CONSTRAINT `libraries_kategori_id_foreign` FOREIGN KEY (`kategori_id`) REFERENCES `tipes`(`id`) ON DELETE CASCADE ON UPDATE RESTRICT;");
        });
    }
}
