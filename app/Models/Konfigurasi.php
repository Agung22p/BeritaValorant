<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konfigurasi extends Model
{
    use HasFactory;
    protected $table = 'konfigurasi';

    protected $fillable = [
        'judul_website',
        'profil_website',
        'instagram',
        'facebook',
        'email',
        'alamat',
        'no_wa'
    ];
}
