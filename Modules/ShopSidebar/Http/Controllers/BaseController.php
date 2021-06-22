<?php

namespace Modules\ShopSidebar\Http\Controllers;

use App\Http\Controllers\BaseShopController;
use Modules\ShopSidebar\Http\Repositories\ShopSidebarRepository;

class BaseController extends BaseShopController
{
    protected $shopSidebarRepository;

    public function __construct()
    {
        parent::__construct();

        $this->shopSidebarRepository = app(ShopSidebarRepository::class);
    }
}
