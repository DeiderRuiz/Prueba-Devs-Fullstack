<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function login(){
        $credenciales = request()->only('email', 'password');
        if (Auth::attempt($credenciales)) {
            request()->session()->regenerate();
            return redirect('dashboard');
        }
        return redirect('/')->with('warn', 'Las crecenciales son incorrectas.');;
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }
}
