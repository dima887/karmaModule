<?php

namespace Modules\BlogPost\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [];

    protected static function newFactory()
    {
        return \Modules\BlogPost\Database\factories\CommentFactory::new();
    }

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
