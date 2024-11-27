<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class registerController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function registerData(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|unique:users|email',
            'username' => 'required|unique:users|max:255',
            'password' => 'required|string|min:8'
        ]);

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'username' => $data['username'],
            'password' => Hash::make($data['password']),
            'role' => 'user' //role of account
        ]);

        if($user)
        {
            return redirect('register')->with('success', 'Account Successfully Registered!');
        }

        return redirect()->back()->with('error', 'account is not successfully register!');

    }
}
