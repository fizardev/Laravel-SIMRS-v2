<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Show specified view.
     */
    public function loginView(): View
    {
        return view('login.main', [
            'layout' => 'base'
        ]);
    }

    /**
     * Authenticate login user.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function login(LoginRequest $request): void
    {
        // {{ dd($request); }}
        if (!Auth::attempt([
<<<<<<< HEAD
            'username' => $request->username,
=======

            'email' => $request->email,
>>>>>>> 5e72d0563a35ec1f142c71e900c14eabdc6403db
            'password' => $request->password
        ])) {
            throw new \Exception('Wrong username or password.');
        }
    }

    /**
     * Logout user.
     */
    public function logout(): RedirectResponse
    {
        Auth::logout();
        return redirect('login');
    }
}
