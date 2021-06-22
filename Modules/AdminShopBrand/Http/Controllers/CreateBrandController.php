<?php

namespace Modules\AdminShopBrand\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;

class CreateBrandController extends BaseController
{

    /**
     * Создание нового бренда
     *
     * @return Renderable
     */
    public function create()
    {
        return view('adminshopbrand::createBrand');
    }
}
