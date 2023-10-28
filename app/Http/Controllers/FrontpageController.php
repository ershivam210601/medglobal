<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontpageController extends Controller
{
    public function home()
    {
        $category = Category::all();
        return view('home', [
            'category' => $category,
        ]);
    }

    public function category()
    {
        $category = Category::all();
        return view('category', [
            'category' => $category,
        ]);
    }

    public function categoryProduct($slug=null)
    {
        $category = Category::where('slug', $slug)->first();
        $products = $category->products()->orderBy('created_at');
      
        return view('product', [
            'products' => $products,
        ]);
    }

    public function productDetails()
    {
        $products = Product::all();
        return view('product', [
            'products' => $products,
        ]);
    }
}
