<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Info;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class InfoController extends Controller
{
    public function index()
    {
        $plans = Info::all();
        return view('admin.info.index', compact('info'));
    }

    public function create()
    {
        return view('admin.info.create');
    }

    public function store(Request $request)
    {

        $info = new Info;
        $info->mobile = $request->input('mobile');
        $info->landline = $request->input('mobile');
        $info->email = $request->input('email');
        $info->helpmail = $request->input('helpmail');
        $info->address = $request->input('address');
        $info->save();
        return Redirect::route('admin.Settings', 'info-settings')->withSuccess('Contact Added Successfully');
    }

    public function edit($id)
    {
        $info = Info::find($id);
        return view('admin.info.edit', compact('info'));
    }

    public function update(Request $request, $id)
    {
        $info = Info::find($id);
        $info->mobile = $request->input('mobile');
        $info->landline = $request->input('mobile');
        $info->email = $request->input('email');
        $info->helpmail = $request->input('helpmail');
        $info->address = $request->input('address');
        $info->update();
        return Redirect::route('admin.Settings', 'info-settings')->withSuccess('Contact Updated Successfully');
    }

    public function destroy($id)
    {
        $info = Info::find($id);
        $info->delete();
        return redirect()->back()->with('status', 'Contact Deleted Successfully');
    }
}
