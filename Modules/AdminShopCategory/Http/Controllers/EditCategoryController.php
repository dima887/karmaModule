<?php

namespace Modules\AdminShopCategory\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;

class EditCategoryController extends BaseController
{
    /**
     * Отредактировать категорию
     *
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('adminshopcategory::editCategory', compact('id'));
    }

}
