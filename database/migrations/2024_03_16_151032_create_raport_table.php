<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('raport', function (Blueprint $table) {
            $table->id();
            $table->foreignId('siswa_id')->constrained('siswa')->onDelete('cascade');
            $table->string('semester');
            $table->string('tahun_ajaran');
            $table->decimal('rata_rata_nilai', 5, 2);
            $table->string('keterangan');
            $table->enum('jenjang', ['SMP', 'SMA']);
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('raport');
    }
};
