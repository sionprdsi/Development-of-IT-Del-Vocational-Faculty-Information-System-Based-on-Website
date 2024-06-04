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
        Schema::create('tentangs', function (Blueprint $table) {
            $table->id();
            $table->longText('sejarah');
            $table->text('sejarah_foto')->nullable();
            $table->longText('visi');
            $table->longText('misi');
            $table->text('tujuan_foto')->nullable();
            $table->text('landasan');
            $table->text('sasaran');
            $table->string('makna')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tentangs');
    }
};
