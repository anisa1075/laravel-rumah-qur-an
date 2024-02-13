<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dataGuru extends Model
{
    use HasFactory;
    protected $table = 'gurus';
    protected $fillable = [
        'img',
        'guru_id',
        'kategori_id',
        'slug',
    ];

    public function guru()
    {
        return $this->belongsTo(User::class, 'guru_id', 'id');
    }
    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id', 'id');
    }

    
}
