<?php

namespace App\Models;

use App\Models\Guru;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $table = 'jadwal';

    protected $fillable = [
        'kelas',
        'hari',
        'jam',
        'mapel',
        'guru_id'
    ];

    public function guru()
    {
        return $this->belongsTo(Guru::class);
    }
}

