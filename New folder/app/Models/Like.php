<?php

namespace App\Models;

use App\Models\Foto;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Like extends Model
{
    use HasFactory;
    protected $fillable = [
        'foto_id',
        'user_id',
    ];
    protected $table = 'likefotos';

    //nilai balik ke user
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    //nilai balik ke foto
    public function fotos()
    {
        return $this->belongsTo(Foto::class, 'foto_id', 'id');
    }
}
