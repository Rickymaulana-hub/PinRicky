<?php

namespace App\Models;

use App\Models\Like;

use App\Models\User;
use App\Models\Album;
use App\Models\Komentar;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Foto extends Model
{
    use HasFactory;
    protected $fillable = [
        'judul_foto',
        'deskripsi_foto',
        'url',
        'user_id',
        'album_id'
    ];
    protected $table = 'fotos';

    //nilai balik ke user
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    //nilai balik ke album
    public function albums()
    {
        return $this->belongsTo(Album::class, 'album_id', 'id');
    }


    //nilai ke komentar
    public function comments()
    {
        return $this->hasMany(Komentar::class, 'foto_id', 'id');
    }
    //nilai ke like
    public function likefotos()
    {
        return $this->hasMany(Like::class, 'foto_id', 'id');
    }
}
