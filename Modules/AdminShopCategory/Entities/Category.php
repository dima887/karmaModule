<?php

namespace Modules\AdminShopCategory\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'category',
        'thumbnail',
        'slug',
        'type',
    ];
}
