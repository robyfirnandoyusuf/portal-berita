<?php

namespace App\Http\Controllers\Backsite;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
  public function index()
  {
    return view('backsite.login',[
        'title' => 'Login',
        'active' => 'login'
    ]);
  }
  public function authenticate(Request $request)
  {
  $scredentials = $request->validate([
        'email' => 'required|email:dns',
        'password' => 'required'
    ]);


         if(Auth::attempt($scredentials)){
            $request->session()->regenerate();

            return redirect()->intended('backsite/berita');
         } 

         return back()->with('loginError', 'Login Failed!');

  }
  public function logout(){
      Auth::logout();
  
      request()->session()->invalidate();
  
      request()->session()->regenerateToken();
  
      return redirect()->route('backsite.login');
  }
}
