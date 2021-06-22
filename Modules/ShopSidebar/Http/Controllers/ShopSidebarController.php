<?php

namespace Modules\ShopSidebar\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;

class ShopSidebarController extends BaseController
{
    /**
     * Просмотр сайдбара магазига
     *
     * @return Renderable
     */
    public function sidebar()
    {
        $category = $this->shopSidebarRepository->getCategoryCountProduct();

        $brand = $this->shopSidebarRepository->getBrandCountProduct();

        return view('shopsidebar::sidebar', compact('category', 'brand'));
    }
}
