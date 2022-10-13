<?php

namespace App\Http\Controllers\Admin;

#use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Route;

class AdminLoginController extends Controller
{
    public function __construct()
    {
      $this->middleware('guest:admin', ['except' => ['logout']]);
    }

    public function showLoginForm()
    {
      return view('admin.admin_login');
    }

    public function login(Request $request)
    {
      $this->validate($request, [
        'email' => 'required|email',
        'password' => 'required|min:6'
      ]);

      if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
        return redirect()->intended(route('admin.dashboard'));
      }

      return redirect()->back()->withInput($request->only('email', 'remeber'));
    }

    public function logout()
    {
      Auth::guard('admin')->logout();
      return redirect('/admin');
    }
}
