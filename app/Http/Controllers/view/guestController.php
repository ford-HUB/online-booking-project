<?php

namespace App\Http\Controllers\view;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class guestController extends Controller
{
    public function index()
    {
        return view('guest.landingPage');
    }

    public function destination()
    {
        return view('components.destination');
    }
}
