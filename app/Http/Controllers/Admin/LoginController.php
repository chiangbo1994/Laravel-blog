<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use LaravelChen\MyFlash\MyFlash;

class LoginController extends Controller
{
    public function index()
    {
        MyFlash::success('欢迎回来!');
        return view('admin.login.index');
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('admin.login.index');
    }
}
