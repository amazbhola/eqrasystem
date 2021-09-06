<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticationController extends Controller
{
    public function store(LoginRequest $request)
    {
        $data = [];
        $data['page_title'] = "Dashboard";
        $cradentials = $request->only([
            'email','password'
        ]);

        if (Auth::attempt($cradentials)) {
            // if (!auth()->user()->hasVerifiedEmail()) {
            //    auth()->logout();
            //    session()->flash('error','Verify your email');
            //    return redirect()->back();
            // }
           session()->flash('massege','Login Successfull');
           return redirect()->route('login.index', $data);
        }
        session()->flash('error','Invalid Cradintials');
        return redirect()->back();

    }
    public function index()
    {
        $data =[];
        $data['page_title'] ='Dashboard';
        return view('Backend.dashboard');
    }

    public function create()
    {
        Auth::logout();
        session()->flash('massege','Loged out Successfull');
        return view('Auth.login');
    }
}
