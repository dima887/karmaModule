<?php

namespace Modules\AdminShopProduct\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'category_id',
        'brand_id',
        'description',
        'price',
        'count',
        'thumbnail',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

//    public function reviews()
//    {
//        return $this->hasMany(Review::class);
//    }

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

    /**
     * Мутатор
     * Преобразует значение атрибута перед сохранением в БД
     *
     * @param $value
     */
    public function setThumbnailAttribute($value)
    {
        $this->attributes['thumbnail'] = json_encode($value);
    }
}
