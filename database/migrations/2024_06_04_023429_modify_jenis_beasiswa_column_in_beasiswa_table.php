<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyJenisBeasiswaColumnInBeasiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('beasiswa', function (Blueprint $table) {
            $table->string('jenis_beasiswa')->change(); // Mengubah kolom jenis_beasiswa menjadi string biasa
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('beasiswa', function (Blueprint $table) {
            // Kembalikan ke tipe data awal jika di-rollback
            $table->enum('jenis_beasiswa', ['Beasiswa Prestasi', 'Beasiswa Pendidikan', 'Beasiswa Penelitian'])->change();
        });
    }
}
