<?php

namespace Modules\AdminShopCategory\Http\Repositories;

use App\Http\Repositories\CoreRepository;
use Modules\AdminShopCategory\Entities\Category;


/**
 * Class ShopCategoryRepository
 * @package Modules\AdminShopCategory\Http\Repositories
 */
class ShopCategoryRepository extends CoreRepository
{
    public function getModelClass()
    {
        return Category::class;
    }

    /**
     * Получить все категории
     *
     * @return mixed
     */
    public function getAllCategory()
    {
        return $this->startConditions()->toBase()->get();
    }

    /**
     * Получить категорию по id
     *
     * @param $id
     * @return mixed
     */
    public function getEdit($id)
    {
        return $this->startConditions()->find($id);
    }

}
