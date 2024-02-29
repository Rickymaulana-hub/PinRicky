<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Trigerlogin extends Model
{
    use HasFactory;
    protected $guarded =[];
    public function user(){
    return $this->BelongsTo(User::class, 'id_user','id');
    }
}
