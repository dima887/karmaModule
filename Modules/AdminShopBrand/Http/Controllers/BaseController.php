<?php

namespace Modules\AdminShopBrand\Http\Controllers;

use App\Http\Controllers\BaseAdminShopController;
use Modules\AdminShopBrand\Http\Repositories\ShopBrandRepository;

class BaseController extends BaseAdminShopController
{
    protected $shopBrandRepository;

    public function __construct()
    {
        parent::__construct();
        $this->shopBrandRepository = app(ShopBrandRepository::class);
    }
}
