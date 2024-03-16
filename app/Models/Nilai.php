<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;
    protected $table = 'nilai';

    protected $fillable = [
        'siswa_id',
        'mata_pelajaran_id',
        'nilai_ulangan_harian',
        'nilai_ujian_tengah_semester',
        'nilai_ujian_akhir_semester',
        'sumber_nilai',
        'jenjang',
    ];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }

    public function mataPelajaran()
    {
        return $this->belongsTo(MataPelajaran::class);
    }
}
