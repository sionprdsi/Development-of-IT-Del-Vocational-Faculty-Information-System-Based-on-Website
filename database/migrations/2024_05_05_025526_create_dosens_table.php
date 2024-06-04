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
        Schema::create('dosens', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('prodi_id');
            $table->foreign('prodi_id')->references('id')->on('prodis')->onDelete('cascade');
            $table->string('nama');
            $table->string('gambar')->nullable();
            $table->text('tentang')->nullable();
            $table->string('jabatan')->nullable();
            $table->text('pendidikan')->nullable();
            $table->text('prestasi')->nullable();
            $table->text('publikasi')->nullable();
            $table->text('pengalaman_kerja')->nullable(); // Kolom untuk pengalaman kerja dosen
            $table->text('keahlian')->nullable(); // Kolom untuk keahlian dosen
            $table->text('pengabdian_masyarakat')->nullable(); // Kolom untuk pengabdian kepada masyarakat
            $table->text('media_sosial')->nullable(); // Kolom untuk media sosial dosen
            $table->string('nidn')->nullable(); // Tambahkan kolom untuk NIDN
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dosens');
    }
};
