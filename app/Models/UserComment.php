<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserComment extends Model
{
    use HasFactory;

    protected $table = 'user_comments';
    protected $fillable = ['message', 'likes', 'image'];

    public function post()
    {
        return $this->belongsTo(UserPost::class, 'user_posts_id');
    }
}
