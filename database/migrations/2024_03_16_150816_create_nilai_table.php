<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('nilai', function (Blueprint $table) {
            $table->id();
            $table->foreignId('siswa_id')->constrained('siswa')->onDelete('cascade');
            $table->foreignId('mata_pelajaran_id')->constrained('mata_pelajaran')->onDelete('cascade');
            $table->decimal('nilai_ulangan_harian', 5, 2)->nullable();
            $table->decimal('nilai_ujian_tengah_semester', 5, 2)->nullable();
            $table->decimal('nilai_ujian_akhir_semester', 5, 2)->nullable();
            $table->enum('sumber_nilai', ['e-learning', 'manual']);
            $table->enum('jenjang', ['SMP', 'SMA']);
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('nilai');
    }
};
