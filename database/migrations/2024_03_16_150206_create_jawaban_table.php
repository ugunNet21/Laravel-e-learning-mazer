<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('jawaban', function (Blueprint $table) {
            $table->id();
            $table->foreignId('soal_id')->constrained('soal')->onDelete('cascade');
            $table->string('opsi_jawaban');
            $table->enum('jenjang', ['SMP', 'SMA']);
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('jawaban');
    }
};
