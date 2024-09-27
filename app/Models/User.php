<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// agar ketika login dapat keakses ke hal home, maka
// di model user, berikan Authenticable 2 ini
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class User extends Model implements AuthenticatableContract
{
    use Authenticatable;

    protected $table = 'user';
    protected $primaryKey = 'id_user';
    protected $fillable = ['username', 'password'];

    public function posts()
    {
        return $this->hasMany(Post::class, 'user_id');
    }
}
