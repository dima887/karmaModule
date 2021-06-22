<?php

namespace Modules\AdminShopProduct\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;

class CreateProductController extends BaseController
{
    /**
     * Добавление нового товара
     *
     * @return Renderable
     */
    public function create()
    {
        $data = $this->shopProductRepository->getCategoryAndBrandFromProduct();

        return view('adminshopproduct::createProduct', compact('data'));
    }
}
