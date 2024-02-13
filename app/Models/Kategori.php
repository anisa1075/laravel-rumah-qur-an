<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $table = 'kategoris';

    protected $fillable = [
        'nama_kategori',
        'deskripsi',
        'harga',
        'guru_id',
        'slug',
    ];

    public function guru()
    {
        return $this->belongsTo(User::class, 'guru_id', 'id');
    }
}
