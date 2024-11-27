<?php

namespace App\Http\Controllers\view;

use App\Http\Controllers\Controller;
use App\Models\company;
use App\Models\User;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class adminController extends Controller
{
    public function index()
    {
        $company = company::all();
        return view('admin.home', compact('company'));
    }

    public function dashboard()
    {
        $company = company::all();
        return view('admin.dashboard', compact('company'));
    }

    public function post()
    {
        $company = company::all();
        return view('admin.post', compact('company'));
    }

    public function view()
    {
        $company = company::all();
        return view('admin.view', compact('company'));
    }

    public function users()
    {
        $user = User::where('role', 'user')->get();
        return view('admin.users', compact('user'));
    }

    public function bookings()
    {
        $company = company::all();
        return view('admin.bookings', compact('company'));
    }

    public function approvalBookings()
    {
        $company = company::all();
        return view('admin.approveBookings', compact('company'));
    }
}
