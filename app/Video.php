<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Comment;
use App\Tag;

class Video extends Model
{
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }
}
