<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbsensiGuru extends Model
{
    use HasFactory;
    protected $table = 'absensi_guru';

    protected $fillable = [
        'guru_id',
        'tanggal',
        'kehadiran',
        'jenjang',
    ];

    public function guru()
    {
        return $this->belongsTo(Guru::class);
    }
}
