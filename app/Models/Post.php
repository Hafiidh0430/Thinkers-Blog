<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = 'post';
    protected $primaryKey = 'id';
    protected $fillable = ['image', 'title', 'description', 'username'];

    // public function user()
    // {
    //     return $this->belongsTo(User::class, ['id_user', 'id']);
    // }
}
