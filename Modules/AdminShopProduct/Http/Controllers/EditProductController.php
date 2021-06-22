<?php

namespace Modules\AdminShopProduct\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;

class EditProductController extends BaseController
{


    /**
     * Редактирование товара
     *
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $data = $this->shopProductRepository->getCategoryAndBrandFromProduct();

        return view('adminshopproduct::editProduct', compact('id', 'data'));
    }
}
