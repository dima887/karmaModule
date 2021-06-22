<?php

namespace Modules\ShopCategory\Http\Controllers;

use App\Http\Controllers\BaseShopController;
use Modules\ShopCategory\Http\Repositories\ShopCategoryRepository;
use Modules\ShopSidebar\Http\Controllers\ShopSidebarController;

class BaseController extends BaseShopController
{
    protected $shopCategoryRepository;

    /**
     * Сайдбар магазина
     */
    protected $shopSidebarController;

    public function __construct()
    {
        parent::__construct();

        $this->shopCategoryRepository = app(ShopCategoryRepository::class);

        $this->shopSidebarController = app(ShopSidebarController::class);
    }
}
