<?php

namespace App\Http\Controllers;

use App\Http\Requests\SignInFormRequest;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index() {
        return view("auth.index");
    }

    public function signUp() {
        return view("auth.reg");
    }

    public function signIn(SignInFormRequest $request) {
        if(!auth()->attempt($request -> validated())) {
            return back() -> withErrors([
                'email'=> 'Error',
            ])->onlyInput('email');
        }

        $request->session()->regenerate();

        return redirect() -> intended(route('home'));
    }
}
