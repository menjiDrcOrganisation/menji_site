<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Models\PostImage;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'slug', 'content', 'user_id'];

    protected static function booted()
    {
        static::creating(function ($post) {
            $post->slug = Str::slug($post->title);
        });
    }

    public function images()
    {
        return $this->hasMany(PostImage::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
