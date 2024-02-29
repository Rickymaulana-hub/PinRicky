<?php

namespace App\Models;

use App\Models\Foto;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Album extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_album',
        'deskripsi',
        'foto',
        'user_id',
    ];
    protected $table = 'albums';


    // nilai ke foto
    public function fotos()
    {
        return $this->hasMany(Foto::class, 'foto_id', 'id');
    }
}
