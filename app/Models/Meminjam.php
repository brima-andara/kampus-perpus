<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meminjam extends Model
{
    use HasFactory;

    public function book()
    {
        return $this->belongsTo(Book::class, 'book_id'); // Menghubungkan book_id dengan tabel books
    }


    protected $table = 'meminjams';
    protected $fillable = [
        'nim',
        'nomor_hp',
        'tanggal_pinjam',
        'seri',
    ];

}
