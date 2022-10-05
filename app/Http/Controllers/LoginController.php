<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request){
        $formVields=$request->only(['email','password']);
        if(Auth::attempt($formVields)){
            return redirect()->intended('/');
        }
        return back()->withErrors([
            'email'=>'Error'
        ]);
    }
}
