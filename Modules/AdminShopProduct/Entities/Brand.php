<?php

namespace Modules\AdminShopProduct\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Brand extends Model
{
    use HasFactory;

    protected $fillable = [];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
