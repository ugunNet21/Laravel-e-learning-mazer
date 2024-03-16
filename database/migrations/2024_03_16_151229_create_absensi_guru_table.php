<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('absensi_guru', function (Blueprint $table) {
            $table->id();
            $table->foreignId('guru_id')->constrained('guru')->onDelete('cascade');
            $table->date('tanggal');
            $table->enum('kehadiran', ['hadir', 'tidak_hadir', 'izin']);
            $table->enum('jenjang', ['SMP', 'SMA']);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('absensi_guru');
    }
};
