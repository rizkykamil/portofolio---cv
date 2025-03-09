<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\Factory;

class LoginController extends Controller
{
    public function index()
    {
        return view('admin.auth.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->only( 'email', 'password');


        if (auth()->attempt($credentials)) {
            return redirect()->route('admin.blog.index');
        }

        return back()->with('error', 'Invalid credentials');
    }
}
