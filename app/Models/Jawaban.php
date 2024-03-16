<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jawaban extends Model
{
    use HasFactory;
    protected $table = 'jawaban';

    protected $fillable = [
        'soal_id',
        'opsi_jawaban',
        'jenjang',
    ];

    public function soal()
    {
        return $this->belongsTo(Soal::class);
    }
}
