<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;
use App\Video;

class Tag extends Model
{

    protected $guarded = [];

    public function posts()
    {
        return $this->morphByMany(Post::class, 'taggable');
    }

    public function videos()
    {
        return $this->morphByMany(Video::class, 'taggable');
    }
}
