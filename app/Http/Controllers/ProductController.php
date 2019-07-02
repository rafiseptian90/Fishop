<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\Input;
use App\Purchase;
use Auth;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with(['category'])->orderBy('name', 'asc');



        if (Input::get('search')) {
            $q = Input::get('search');

            $input = strtolower($q);

            if ($input === 'web') {
                $input = '1';
            }
            if ($input === 'android') {
                $input = '2';
            }
            if ($input === 'desktop') {
                $input = '3';
            }

            $products = Product::where('name', 'like', '%' . $q . '%')->Orwhere('category_id', $input);
        }

        $products = $products->get();

        return view('sites.products', compact('products'));
    }
    public function view($id)
    {
        $product = Product::with('purchase')->findOrFail($id);

        $comments = Purchase::with('user')->where('rate', '!=', null)->where('product_id', $id)->get();

        if (Auth::check()) {
            $purchase = $product->purchase->where('user_id', auth()->user()->id)->first();
        } else {
            $purchase = null;
        }

        return view('sites.view_product', ['product' => $product, 'comments' => $comments, 'purchase' => $purchase]);
    }
}
