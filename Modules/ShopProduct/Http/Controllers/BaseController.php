<?php

namespace Modules\ShopProduct\Http\Controllers;

use App\Http\Controllers\BaseShopController;
use Modules\ShopProduct\Http\Repositories\ShopProductRepository;

class BaseController extends BaseShopController
{
    protected $shopProductRepository;

    public function __construct()
    {
        parent::__construct();

        $this->shopProductRepository = app(ShopProductRepository::class);
    }
}
