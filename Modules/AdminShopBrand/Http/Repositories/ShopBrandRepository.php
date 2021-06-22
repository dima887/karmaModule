<?php

namespace Modules\AdminShopBrand\Http\Repositories;

use App\Http\Repositories\CoreRepository;
use Modules\AdminShopBrand\Entities\Brand;


/**
 * Class ShopBrandRepository
 * @package Modules\AdminShopBrand\Http\Repositories
 */
class ShopBrandRepository extends CoreRepository
{
    protected function getModelClass()
    {
        return Brand::class;
    }

    /**
     * Получить все бренды с пагинацией
     * @return mixed
     */
    public function getAllBrandWithPaginate($perPage = null)
    {
        return $this->startConditions()->paginate($perPage);
    }

    /**
     * Получить бренд по id
     * @param $id
     * @return mixed
     */
    public function getId($id)
    {
        return $this->startConditions()->find($id);
    }
}
