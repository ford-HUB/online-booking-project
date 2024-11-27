<?php

namespace App\Http\Controllers\auth_admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class login_adminController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }

    public function loginAdmin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $admin = User::where('email', $request->email)->first();


        if ($admin && Hash::check($request->password, $admin->password)) {
            Auth::login($admin);
            // dd($admin); for dubugging rana
            return redirect()->intended('/admin/home');
        }

        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
