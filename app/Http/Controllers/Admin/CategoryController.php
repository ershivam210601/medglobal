<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
// use File;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

use App\Models\Commercial;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::all();
        return view('admin.category.index', compact('category'));
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(Request $request)
    {

        $category = new Category;
        $category->name = $request->input('name');
        $category->slug = Str::slug($request->input('name'), '-');
        $category->short_description = $request->input('short_desc');
        $category->long_description = $request->input('long_desc');
        $category->seo_title = $request->input('Meta_Title');
        $category->seo_keywords = $request->input('Meta_Keyword');
        $category->seo_description = $request->input('Meta_Description');

        if ($request->hasfile('category_image')) {
            $file = $request->file('category_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('uploads/category/', $filename);
            $category->category_image = $filename;
        }
        $category->save();
        return Redirect::route('admin.Settings', 'category-settings')->withSuccess('Category Added Successfully');
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.category.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $category->name = $request->input('name');
        $category->slug = Str::slug($request->input('name'), '-');
        $category->short_description = $request->input('short_desc');
        $category->long_description = $request->input('long_desc');
        $category->seo_title = $request->input('Meta_Title');
        $category->seo_keywords = $request->input('Meta_Keyword');
        $category->seo_description = $request->input('Meta_Description');

        if ($request->hasfile('category_image')) {
            $destination = 'uploads/service/' . $category->category_image;
            if (
                File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('category_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('uploads/category/', $filename);
            $category->category_image = $filename;
        }

        $category->update();
        return Redirect::route('admin.Settings', 'category-settings')->withSuccess('Category Updated Successfully');
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $destination = 'uploads/service/' . $category->service_image;
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $category->delete();
        return redirect()->back()->with('status', 'Service Deleted Successfully');
    }
}
