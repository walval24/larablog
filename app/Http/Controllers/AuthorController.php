<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\Support\Facades\Auth;

class AuthorController extends Controller
{
    public function index(Request $request)
    {
        return view('back.pages.home');
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();
        return redirect()->route('author.login');
    }


    public function ResetForm(Request $request, $token = null)
    {
        $data = [
            'pageTitle' => 'Reset Password'
        ];
        return view('back.pages.auth.reset', $data)->with(['token'=>$token,'email'=>$request->email]);
    }
}
