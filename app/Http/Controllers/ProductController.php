<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\Input;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with(['category'])->orderBy('name', 'asc');



        if (Input::get('search')) {
            $q = Input::get('search');

            strtolower($q);

            if ($q === 'web') {
                $q = '1';
            }
            if ($q === 'android') {
                $q = '2';
            }
            if ($q === 'desktop') {
                $q = '3';
            }

            $products = Product::where('name', 'like', '%' . $q . '%')->Orwhere('category_id', $q);
        }

        $products = $products->get();

        return view('sites.products', compact('products'));
    }
    public function view($id)
    {
        $product = Product::findOrFail($id);

        return view('sites.view_product', compact('product'));
    }
}
