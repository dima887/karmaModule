<?php

namespace Modules\Home\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Cookie;

class HomeController extends Controller
{
    /**
     * Главная страница
     *
     * @return Renderable
     */
    public function index()
    {
        return view('home::index');
    }
}
