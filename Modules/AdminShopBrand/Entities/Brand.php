<?php

namespace Modules\AdminShopBrand\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Brand extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand',
        'slug',
        'thumbnail',
    ];

}
