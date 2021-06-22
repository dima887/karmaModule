<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Modules\User\Http\Requests\AuthUserRequest;

class AuthUserController extends Controller
{
    /**
     * Аутентификация пользователя
     *
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function authenticate(AuthUserRequest $request)
    {
        $credentials = $request->only('name', 'password');



        if (Auth::attempt($credentials, true)) {
            session()->flash('success', 'Вы успешно авторизовались');
            if (Auth::user()->is_admin) {
                return redirect()->route('admin.home');
            } else {
                return redirect()->route('home');
            }
        }
        return redirect()->back()->with('error', 'Логин или пароль не совпадают');

    }
}
