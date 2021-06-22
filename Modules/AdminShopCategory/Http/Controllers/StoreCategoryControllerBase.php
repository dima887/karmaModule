<?php

namespace Modules\AdminShopCategory\Http\Controllers;

use Modules\AdminShopCategory\Entities\Category;
use Modules\AdminShopCategory\Http\Requests\ShopCategoryRequest;

class StoreCategoryControllerBase extends BaseController
{
    /**
     * Сохранение категории в базу
     *
     * @param ShopCategoryRequest $request
     */
    public function store(ShopCategoryRequest $request)
    {
        $data = $request->all();

        if ($request->hasFile('thumbnail')) {
            $data['thumbnail'] = $request->file('thumbnail')->store('app/images/category');
        }

        Category::create($data);

        $request->session()->flash('success', 'Категория добавлена');
        return redirect()->route('admin.categories');
    }
}
