<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\company;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class postController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'company-name' => 'required|string|max:50',
            'vessel-type' => 'required|string|max:50',
            'contact' => 'required|string|min:0|max:11',
            'origin' => 'required|string|max:50',
            'destination' => 'required|string|max:50',
            'schedule_departure' => 'required|string',
            'capacity' => 'required|string',
            'fees' => 'required|numeric'
        ]);

        $company = company::create([
            'name' => $data['company-name'],
            'vessel' => $data['vessel-type'],
            'origin' => $data['origin'],
            'destination' => $data ['destination'],
            'schedule' => $data['schedule_departure'],
            'contact' => $data['contact'],
            'capacity' => $data['capacity'],
            'fee' => $data['fees']
        ]);

        if($company)
        {
            return redirect('/admin/post')->with('success', 'Data is successfully posted');
        }

        return redirect()->back()->with('error','data is not successfully added!');
    }
}
