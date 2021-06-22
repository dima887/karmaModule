<?php

namespace Modules\AdminShopCategory\Http\Controllers;

use App\Http\Controllers\BaseAdminShopController;
use Modules\AdminShopCategory\Http\Repositories\ShopCategoryRepository;

class BaseController extends BaseAdminShopController
{

    /**
     * @var \Illuminate\Contracts\Foundation\Application|mixed
     */
    protected $shopCategoryRepository;

    public function __construct()
    {
        parent::__construct();

        $this->shopCategoryRepository = app(ShopCategoryRepository::class);
    }
}
