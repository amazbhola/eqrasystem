<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

use Illuminate\Http\Request;

class VerificationController extends Controller
{

    use EmailVerificationRequest;
    public function verify(Request $request)
    {
        $request->fullfill()
    }
}
