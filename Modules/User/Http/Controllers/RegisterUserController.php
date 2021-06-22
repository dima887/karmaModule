<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class RegisterUserController extends Controller
{
    /**
     * Регистрация нового пользователя
     *
     * @return Renderable
     */
    public function registerUser()
    {
        return view('user::auth.registerUser');
    }
}
