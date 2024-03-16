<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('e_learning', function (Blueprint $table) {
            $table->id();
            $table->foreignId('guru_id')->constrained('guru')->onDelete('cascade');
            $table->foreignId('mata_pelajaran_id')->constrained('mata_pelajaran')->onDelete('cascade');
            $table->string('judul');
            $table->text('deskripsi');
            $table->string('tautan');
            $table->enum('jenjang', ['SMP', 'SMA']);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('e_learning');
    }
};
