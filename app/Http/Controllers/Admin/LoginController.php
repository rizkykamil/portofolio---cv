<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\Factory;

class LoginController extends Controller
{
    public function index(): Factory|View
    {
        return view(view: 'admin.auth.login');
    }

    // public function authenticate(Request $request): mixed|RedirectResponse
    // {
    //     $credentials = $request->only(keys: 'email', 'password');

    //     if (auth()->attempt(credentials: $credentials)) {
    //         return redirect()->route(route: 'dashboard');
    //     }

    //     return back()->with(key: 'error', value: 'Invalid credentials');
    // }
}
