<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\settings;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
      $settings = settings::find(1);
      return view('back.auth.login',compact('settings'));
    }
    public function loginPost(Request $request){
      if(Auth::attempt(['email'=>$request->post('email'),'password'=>$request->post('password')])){
        
        toastr()->success('Tekrardan hoşgeldiniz '.Auth::user()->name);
        return redirect()->route('admin.dashboard');
      }
      toastr()->warning('Eposta veya şifre hatalı!');
      return redirect()->route('admin.login');
    }

    public function logout(){
      Auth::logout();
      return redirect()->route('admin.login');
    }
}