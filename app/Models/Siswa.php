<?php

namespace App\Models;

use App\Models\User;
use App\Models\Nilai;
use App\Models\Absensi;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswas';

    protected $fillable = [
        'user_id',
        'nis',
        'nama',
        'kelas'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function nilai()
    {
        return $this->hasMany(Nilai::class);
    }

    public function absensi()
    {
        return $this->hasMany(Absensi::class, 'user_id', 'user_id');
    }
}
