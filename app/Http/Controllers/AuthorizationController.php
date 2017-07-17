<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class AuthorizationController extends Controller
{
    public function login()
    {
        $email = Input::get('email');
        $password = Input::get('password');

        $data = [
            'email' => $email,
            'password' => $password,
            'is_blocked' => 0
        ];

        if (Auth::attempt($data)) {
            return redirect()->route('personal.view');
        }
        
        $errors[] = 'Введенные данные неверны. Попробуйте войти ещё раз.';
        
        return view('auth.login', ['errors' => $errors]);
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('home.view');
    }
}
