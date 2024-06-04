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
                Schema::create('prodis', function (Blueprint $table) {
                    $table->id();
                    $table->string('nama')->nullable();
                    $table->string('slug')->nullable();
                    $table->string('judul')->nullable();
                    $table->string('subjudul')->nullable();
                    $table->text('foto')->nullable();
                    $table->longText('sejarah')->nullable();
                    $table->longText('visi')->nullable();
                    $table->longText('misi')->nullable();
                    $table->longText('tujuan')->nullable();
                    $table->longText('lulusan')->nullable();
                    $table->longText('kurikulum')->nullable();
                    $table->longText('teks_dosen')->nullable();
                    $table->timestamps();
                });
            }

            /**
             * Reverse the migrations.
             */
            public function down(): void
            {
                Schema::dropIfExists('prodis');
            }
        };
