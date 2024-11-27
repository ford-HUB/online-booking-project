<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\company;
use Illuminate\Http\Request;

class viewController extends Controller
{
    public function passData($id)
    {
        $post = company::findOrFail($id);
        return view('admin.view', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'edit-company' => 'required',
            'edit-vessel' => 'required',
            'edit-contact' => 'required',
            'edit-schedule' => 'required'
        ]);

        $post = company::findOrFail($id);
        $post->name = $request->input('edit-company');
        $post->vessel = $request->input('edit-vessel');
        $post->schedule = $request->input('edit-schedule');
        $post->contact = $request->input('edit-contact');
        $post->save();

        return redirect('/admin/view post')->with('success', 'You successfully updated your data');

    }

    public function delete($id)
    {
        $companyId = company::findOrFail($id);

        if(!$companyId)
        {
            return back()->with('error', 'data is not successfully deleted');
        }

        if($companyId)
        {
            $companyId->delete();
            return redirect('/admin/view post')->with('success', 'data is successfully deleted');
        }
    }
}
