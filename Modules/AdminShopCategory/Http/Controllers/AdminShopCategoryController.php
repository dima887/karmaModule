<?php

namespace Modules\AdminShopCategory\Http\Controllers;


class AdminShopCategoryController extends BaseController
{

    /**
     * Просмотр всех категорий
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $category = $this->shopCategoryRepository->getAllCategory();

        return view('adminshopcategory::index', compact('category'));
    }
}
