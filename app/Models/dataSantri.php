<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dataSantri extends Model
{
    use HasFactory;
    protected $table = 'santris';
    protected $fillable = [
        'img',
        'santri_id',
        'kategori_id',
        'guru_id',
        'umur',
        'alamat',
        'jenis_kelamin',
        'notelp',
        'ttl',
    ];

    public function santri()
    {
        return $this->belongsTo(User::class, 'santri_id', 'id');
    }
    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id', 'id');
    }

    public function guru()
    {
        return $this->belongsTo(User::class, 'guru_id', 'id');
    }
}
