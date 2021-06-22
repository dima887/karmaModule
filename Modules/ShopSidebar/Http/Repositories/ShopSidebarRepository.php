<?php


namespace Modules\ShopSidebar\Http\Repositories;


use App\Http\Repositories\CoreRepository;
use Illuminate\Support\Facades\DB;
use Modules\ShopSidebar\Entities\Brand;
use Modules\ShopSidebar\Entities\Category;

class ShopSidebarRepository extends CoreRepository
{

    protected function getModelClass()
    {
        return Category::class;
    }

    /**
     * Список категорий и количество относящихся товаров
     * @return \Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection
     */
    public function getCategoryCountProduct()
    {
        $category = Category::query()
            ->join('products','products.category_id','=','categories.id')
            ->select('categories.category','categories.slug',DB::raw('COUNT(products.category_id) AS counts'))
            ->groupBy('categories.category', 'categories.slug')
            ->get();

        return $category;
    }


    /**
     * Список брендов и количество относящихся товаров
     *
     * @return \Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection;
     */
    public function getBrandCountProduct()
    {
        $brand = Brand::query()
            ->join('products', 'products.brand_id', '=', 'brands.id')
            ->select('brands.brand', 'brands.slug', DB::raw('COUNT(products.brand_id) AS counts'))
            ->groupBy('brands.brand', 'brands.slug')
            ->get();

        return $brand;
    }
}
