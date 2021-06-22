<?php

namespace Modules\ShopCategory\Http\Repositories;


use App\Http\Repositories\CoreRepository;
use Illuminate\Support\Facades\DB;
use Modules\ShopCategory\Entities\Category;

class ShopCategoryRepository extends CoreRepository
{
    public function getModelClass()
    {
        return Category::class;
    }

    /**
     * Список всех товаров если $slug = null, иначе товары относящиеся к конкретной категории или бренду по слагу
     *
     * @param null $slug
     * @return \Illuminate\Support\Collection
     */
    public function getProduct($slug = null)
    {
        if ($slug == null) {

            $product = DB::table('products')
                ->join('brands', 'brands.id', '=', 'products.brand_id')
                ->join('categories', 'products.category_id', '=', 'categories.id')
                ->select('products.*', 'brands.brand', 'brands.slug as slugBrand', 'categories.slug as slugCategory',
                    'categories.category')
                ->orderBy('products.id', 'asc')
                ->get();

        }else {

            $product = DB::table('products')
                ->join('brands', 'brands.id', '=', 'products.brand_id')
                ->join('categories', 'products.category_id', '=', 'categories.id')
                ->select('products.*', 'brands.brand', 'brands.slug as slugBrand', 'categories.slug as slugCategory',
                    'categories.category')
                ->where('categories.slug', '=', "$slug")
                ->orWhere('brands.slug', '=', "$slug")
                ->get();

        }
        foreach ($product as $key => $val) {
            $val->thumbnail = (json_decode($val->thumbnail)[0]);
        }

        return $product;
    }

}
