<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    public function category()
    {
    return $this->belongsTo(Category::class);
    }
    
    public function user()
    {
    return $this->belongsTo(User::class);
    }
    
    public function like_users()
    {
    return $this->belongsToMany(User::class);
    }
    
    public function images()
    {
    return $this->hasMany(Image::class);
    }
    
    public function comments()
    {
    return $this->hasMany(Comment::class);
    }
    
    public function getPaginateByLimit(int $limit_count = 10)
    {
    return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
}
