<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Str;
use App\Models\User;

use ReflectionFunctionAbstract;

class loginController extends Controller 
{
    public function index()
    {
        return view('auth.login');
    }

    public function loginData(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) 
        {
            $remember_token = $request->has('remember_me');
            if($remember_token)
            {
                $this->setCookie(Auth::user());
            }

            auth::login($user);

            return redirect()->route('user.home');

        }

        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    protected function setCookie($user)
    {
        $token = Str::random(60);
        $cookie = cookie('remember_me', $token, 60 * 24 * 30);
        $user->remember_token = $token;   
        $user->save();

        return redirect()->route('user.home')->with('success', 'Logged in successfully')->cookie($cookie);

    }

    public function checkToken()
    {
        $cookie = request()->cookie('remember_me');

        if($cookie)
        {
            $user = User::where('remember_token', $cookie)->first();
            if($user)
            {
                Auth::login($user);
                return redirect('user.home');
            }
        }

        return redirect('login');
    }

    public function logout()
    {
        Auth::logout();
        Cookie::queue(Cookie::forget('remember_me'));
        return redirect('/');
    }

   
}
