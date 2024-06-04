<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyIdColumnInBeasiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('beasiswa', function (Blueprint $table) {
            $table->dropPrimary('id'); // Menghapus primary key lama
            $table->string('id', 36)->primary()->change(); // Mengubah kolom id menjadi string dan set sebagai primary key
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
            $table->dropPrimary('id'); // Menghapus primary key baru
            $table->bigIncrements('id')->primary()->change(); // Kembali ke tipe data awal jika di-rollback
        });
    }
}
