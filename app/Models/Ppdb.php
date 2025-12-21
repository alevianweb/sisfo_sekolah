<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ppdb extends Model
{
    protected $table = 'ppdb';

    protected $fillable = [
        'nama',
        'asal_sekolah',
        'alamat',
        'no_hp',
        'status'
    ];
}
