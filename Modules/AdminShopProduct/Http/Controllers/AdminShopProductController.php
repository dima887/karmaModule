<?php

namespace Modules\AdminShopProduct\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;

class AdminShopProductController extends BaseController
{
    /**
     * Простотр всех товаров
     *
     * @return Renderable
     */
    public function index()
    {
        $product = $this->shopProductRepository->getAllProductWithPaginate(10);

        return view('adminshopproduct::index', compact('product'));
    }
}
