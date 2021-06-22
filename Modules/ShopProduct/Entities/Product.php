<?php

namespace Modules\ShopProduct\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    /**
     * Аксессор
     * Преобразует значение атрибуты при обращении к нему
     *
     * @param $value
     * @return string
     */
    public function getThumbnailAttribute($value)
    {
        return json_decode($value);
    }
}
