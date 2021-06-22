<?php

namespace Modules\ShopCategory\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;

class ShopCategoryController extends BaseController
{
    /**
     * Просмотр всех товаров в магазине, товары по категориям, товары по брендам
     *
     * @return Renderable
     */
    public function index($slug = null)
    {
        $sidebar = $this->shopSidebarController->sidebar();

        $product = $this->shopCategoryRepository->getProduct($slug);

        return view('shopcategory::index', compact('product', 'sidebar'));
    }
}
