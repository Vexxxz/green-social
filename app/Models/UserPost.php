<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class UserPost extends Model
{
    use HasFactory;
    
    protected $table = 'user_posts';
    protected $fillable = ['message', 'likes', 'image'];

    public function comments()
    {
        return $this->hasMany(UserComment::class);
    }
}
