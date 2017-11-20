<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{    
    public function login(LoginRequest $request) {
        $credenciales = Auth::attempt([
            'usuario' => $request->usuario,
            'password' => $request->password

        ]);
        if($credenciales)
            return redirect()->route('escritorio');
        return back()
            ->withErrors(['error' => 'Los datos ingresados son incorrectos'])
            ->withInput($request->only('usuario'));
    }


    public function __construct() {
        $this->middleware('guest', ['only' => 'showLogin']);
    }

    public function showLogin() {
        return view('login.index');
    }

    public function logout() {
        Auth::logout();
        return redirect('/');
    }
    
    
    // use AuthenticatesUsers;

    // /**
    //  * Where to redirect users after login.
    //  *
    //  * @var string
    //  */
    // protected $redirectTo = '/home';

    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
    // }
}
