<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class userDataController extends Controller
{
    public function update(Request $request, $id)
    {
        $request->validate([
            'update-name' => 'required|string|max:255',
            'update-email' => 'required|email'
        ]);

        if($user = User::find($id))
        {
            $user->name = $request->input('update-name');
            $user->email = $request->input('update-email');
            $user->save();
            return redirect('/admin/view users')->with('success', 'Data is successfully updated');
            
        }

        return redirect()->back()->with('error', 'data is not successfully inserted');
    }

    public function delete($id)
    {
        if($user = User::find($id))
        {
            $user->destroy($id);
            return redirect('/admin/view users');
        }
    }
}
