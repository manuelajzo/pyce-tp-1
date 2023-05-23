<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginForm() {
        return view('auth.login-form');
    }

    public function processLogin(Request $request) {
        $credentials = $request->only(['nickname', 'password']);
        
        $request->validate(User::validationRules(), User::validationMessages());

        if(!auth()->attempt($credentials)) {
            return redirect()
                ->route('loginForm')
                ->with('feedback.message', 'Las credenciales registradas no coinciden con nuestros registros')
                ->with('feedback.type', 'danger')
                ->withInput();
        }
        
        $request->session()->regenerate();
        
        return redirect()->route('productsList')->with('feedback.message', 'Se ha logueado con éxito');
    }

    public function processLogout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()
            ->route('loginForm')
            ->with('feedback.message', 'La sesión se cerró con éxito. ¡Te esperamos de nuevo pronto!');
    }
}
