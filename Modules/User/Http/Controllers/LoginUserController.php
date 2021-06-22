<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Routing\Controller;

class LoginUserController extends Controller
{
    /**
     * Авторизация пользователя
     *
     * @return Renderable
     */
    public function loginAuth()
    {
        return view('user::auth.loginAuth');
    }
}
