<?php

namespace Modules\BlogPost\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Model
{
    use HasFactory;

    protected $fillable = [];

    protected static function newFactory()
    {
        return \Modules\BlogPost\Database\factories\UserFactory::new();
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
