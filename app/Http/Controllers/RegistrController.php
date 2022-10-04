<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegistrController extends Controller
{
    public function save(Request $request){
        if(Auth::check()){
            return redirect('catalog');
        }
        $validateFields= $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);
        if(User::where('email',$validateFields['email'])->exists()){
            return redirect()->to(route('user.registration'))->withErrors([
                'email'=>'Уже существует такой email'
            ]);
        }
        $user=User::create($validateFields);
        if($user){
            Auth::login($user);
            return redirect(('catalog'));
        }
        return redirect()->to(route('user.registration'))->withErrors([
            'formError'=>'Произошла ошибка'
        ]);
    }
}
