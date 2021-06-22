<?php

namespace Modules\AdminShopCategory\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;

class CreateCategoryController extends BaseController
{

    /**
     * Добавить новую категорию
     *
     * @return Renderable
     */
    public function create()
    {
        return view('adminshopcategory::createCategory');
    }
}
