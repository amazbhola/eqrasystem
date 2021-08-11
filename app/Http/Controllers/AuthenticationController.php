<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticationController extends Controller
{
    public function store(LoginRequest $request)
    {
        $cradentials = $request->only([
            'email','password'
        ]);

        if (Auth::attempt($cradentials)) {
           session()->flash('massege','Login Successfull');
           return redirect()->route('login.index');
        }
        session()->flash('error','Invalid Cradintials');
        return redirect()->back();

    }
    public function index()
    {
        return view('Backend.dashboard');
    }

    public function create()
    {
        Auth::logout();
        session()->flash('massege','Loged out Successfull');
        return view('Auth.login');
    }
}
