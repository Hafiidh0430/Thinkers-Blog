<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostCategory extends Model 
{
    use HasFactory;
    protected $table = 'post_category';
    protected $primaryKey = 'post_category_id';
    protected $fillable = ['category_id', 'post_id'];

    public function post()
    {
        return $this->belongsTo(Post::class, 'post_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
