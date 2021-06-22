<?php

namespace Modules\AdminShopHome\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Routing\Controller;

class AdminShopHomeController extends Controller
{
    /**
     * Главная страница админки
     *
     * @return Renderable
     */
    public function index()
    {
        return view('adminshophome::index');
    }

}
