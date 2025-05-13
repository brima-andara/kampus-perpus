<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meminjam extends Model
{
    use HasFactory;
    protected $table = 'meminjams';
    protected $fillable = [
        'nim',
        'nomor_hp',
        'tanggal_pinjam',
    ];

}
