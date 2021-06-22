<?php

namespace Modules\AdminShopProduct\Http\Controllers;

use App\Http\Controllers\BaseAdminShopController;
use Modules\AdminShopProduct\Http\Repositories\ShopProductRepository;

class BaseController extends BaseAdminShopController
{
    protected $shopProductRepository;

    public function __construct()
    {
        parent::__construct();

        $this->shopProductRepository = app(ShopProductRepository::class);
    }
}
