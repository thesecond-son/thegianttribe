<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // show login page
    public function login()
    {
        return view('admin.login');
    }

    // handle login
    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        // SIMPLE ADMIN CHECK (we will upgrade later to DB users)
        if ($request->email === 'admin@tgt.com' && $request->password === 'password123') {
            $request->session()->put('is_admin', true);
            return redirect()->route('admin.dashboard');
        }

        return back()->with('error', 'Invalid credentials');
    }

    // logout
    public function logout(Request $request)
    {
        $request->session()->forget('is_admin');
        return redirect('/admin/login');
    }
}