<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\PageMetaTag;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }


    public function Settings($slug = NULL)
    {
        $categories = Category::all();
        $products =Product::all();
        $contacts= Contact::all();
        return view('admin.settings.' . $slug, compact('categories', 'products','contacts'));
    }

    //Saving  Settings
    public function SaveSettings(Request $request, $slug)
    {

        foreach ($request->all() as $key => $value) {
            if (!in_array($key, ['_token', 'Settings_Type'], true)) {
                $this->Save_Meta_Tags($request->Settings_Type, $key, $value, $request);
            }
        }
        return Redirect::route('admin.Settings', $slug)->withSuccess('Settings Updated');
    }
    public function Profile()
    {
        $user = User::where('name', '=', 'Admin')->first();

        return view('admin.settings.profile', compact('user'));
    }
    public function SaveProfile(Request $request)
    {
        $request->validate(
            [
                'username' => 'required|email',
                'password' => 'required|min:6|confirmed'
            ],
            []
        );
        $id = $request->input('userid');
        $password = Hash::make($request->input('password'));
        $user = User::find($id);
        $user->email = $request->input('username');
        $user->password = $password;
        $user->update();
        return Redirect::route('admin.Profile')->withSuccess('Profile Updated Successfully');
    }


    //saving meta tags
    private function Save_Meta_Tags($type, $key, $value, $request)
    {
        $tag = PageMetaTag::where('type', '=', $type)->where('key', '=', $key)->first();
        if ($tag) {
            $file_path = public_path('/storage/' . $tag->value);
        } else {
            $tag = new PageMetaTag;
            $file_path = $type;
        }

        $tag->type = $type;
        $tag->key = $key;
        $tag->value = $value;
        $tag->save();
    }
}
