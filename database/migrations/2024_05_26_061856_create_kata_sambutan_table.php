<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('kata_sambutan', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('nama')->nullable();
            $table->text('teks_kata_sambutan'); // perubahan nama kolom
            $table->date('tanggal');
            $table->string('foto')->nullable();
            $table->string('jabatan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kata_sambutan');
    }
};
