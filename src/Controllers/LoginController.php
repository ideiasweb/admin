<?php

namespace Ideiasweb\Admin\Controllers;

use Ideiasweb\Admin\Requests\LoginRequest;

class LoginController extends Controller
{

    function showLoginForm()
    {
        return view('admin::auth.login');
    }

    function login(LoginRequest $request)
    {
        dd($request->all());
    }

    function logout()
    {
        //
    }

}
