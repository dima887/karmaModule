<?php


namespace Modules\AdminShopProduct\Http\Repositories;


use App\Http\Repositories\CoreRepository;
use Modules\AdminShopProduct\Entities\Brand;
use Modules\AdminShopProduct\Entities\Category;
use Modules\AdminShopProduct\Entities\Product;

class ShopProductRepository extends CoreRepository
{

    protected function getModelClass()
    {
        return Product::class;
    }

    /**
     * Получить все товары с пагинацией
     * @param null $perPage
     * @return mixed
     */
    public function getAllProductWithPaginate($perPage = null)
    {
        $data = $this->startConditions()->query()->orderByDesc('id')->with(['category', 'brand'])->paginate($perPage);

        return $data;
    }

    /**
     * Получить категории и бренды
     * @return array
     */
    public function getCategoryAndBrandFromProduct()
    {
        $data = [
            'category' => Category::select('id', 'category')->toBase()->get(),
            'brand' => Brand::select('id', 'brand')->toBase()->get()
        ];

        return $data;
    }

    /**
     * Получить продукт по id
     * @param $id
     * @return mixed
     */
    public function getId($id)
    {
        return $this->startConditions()->find($id);
    }
}
