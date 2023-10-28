<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use File;
use Illuminate\Support\Str;

use App\Models\Contacts;

class ContactsController extends Controller
{
    public function index()
    {
        $contacts = Contacts::all();
        return view('admin.contacts.index', compact('contacts'));
    }

    // public function create()
    // {
    //     return view('admin.contacts.create');
    // }

    // public function store(Request $request)
    // {

    //     $contacts = new Contacts;
    //     $contacts->name = $request->input('name');
    //     $contacts->price = $request->input('price');
    //     $contacts->features = $request->input('feature');
    //     $contacts->frequency = $request->input('frequency');
    //     $contacts->save();
    //     return Redirect::route('admin.Settings', 'Contact-settings')->withSuccess('Contact Added Successfully');
    // }

    public function edit($id)
    {
        $contact = Contacts::find($id);
        return view('admin.contacts.edit', compact('contact'));
    }

    public function update(Request $request, $id)
    {
        $contacts = Contacts::find($id);
        $contacts->name = $request->input('name');
        $contacts->email = $request->input('email');
        $contacts->subject = $request->input('subject');
        $contacts->message = $request->input('message');
        $contacts->update();
        return Redirect::route('admin.Settings', 'contact-settings')->withSuccess('Contact Updated Successfully');
    }

    public function destroy($id)
    {
        $contacts = Contacts::find($id);
        $contacts->delete();
        return redirect()->back()->with('status', 'Contact Deleted Successfully');
    }
}
