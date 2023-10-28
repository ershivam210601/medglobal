<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index()
    {
        $commercial = Product::all();
        return view('admin.Product.index', compact('product'));
    }

    public function create()
    {
        $categories = Category::pluck('name', 'id')->toArray();
        return view('admin.product.create',compact('categories'));
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $product = new Product;
        $product->name = $request->input('name');
        $product->category_id = $request->input('category');
        $product->slug = Str::slug($request->input('name'), '-');
        $product->short_description = $request->input('short_desc');
        $product->long_description = $request->input('long_desc');
        $product->seo_title = $request->input('Meta_Title');
        $product->seo_keywords = $request->input('Meta_Keyword');
        $product->seo_description = $request->input('Meta_Description');

        if ($request->hasfile('product_image')) {
            $file = $request->file('product_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('uploads/product/', $filename);
            $product->product_image = $filename;
        }
        $product->save();
        return Redirect::route('admin.Settings', 'product-settings')->withSuccess('Product Added Successfully');
    }

    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::pluck('name', 'id')->toArray();
        return view('admin.Product.edit', compact('product','categories'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->name = $request->input('name');
        $product->slug = Str::slug($request->input('name'), '-');
        $product->short_description = $request->input('short_desc');
        $product->long_description = $request->input('long_desc');
        $product->seo_title = $request->input('Meta_Title');
        $product->seo_keywords = $request->input('Meta_Keyword');
        $product->seo_description = $request->input('Meta_Description');

        if ($request->hasfile('product_image')) {
            $destination = 'uploads/service/' . $product->product_image;
            if (
                File::exists($destination)
            ) {
                File::delete($destination);
            }
            $file = $request->file('product_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('uploads/product/', $filename);
            $product->product_image = $filename;
        }

        $product->update();
        return Redirect::route('admin.Settings', 'product-settings')->withSuccess('Product Updated Successfully');
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $destination = 'uploads/service/' . $product->service_image;
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $product->delete();
        return redirect()->back()->with('status', 'Service Deleted Successfully');
    }
}
