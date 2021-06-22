<?php

namespace Modules\AdminShopBrand\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;

class AdminShopBrandController extends BaseController
{
    /**
     * Просмотр всех брендов
     *
     * @return Renderable
     */
    public function index()
    {
        $brand = $this->shopBrandRepository->getAllBrandWithPaginate(10);

        return view('adminshopbrand::index', compact('brand'));
    }
}
