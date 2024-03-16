<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Raport extends Model
{
    use HasFactory;
    protected $table = 'raport';

    protected $fillable = [
        'siswa_id',
        'semester',
        'tahun_ajaran',
        'rata_rata_nilai',
        'keterangan',
        'jenjang',
    ];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }
}
