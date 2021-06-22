<?php

namespace Modules\AdminShopBrand\Http\Controllers;

class EditBrandController extends BaseController
{

    /**
     * Редактирование бренда
     *
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        return view('adminshopbrand::editBrand', compact('id'));
    }

}
