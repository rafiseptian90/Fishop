<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cookie;
use App\Product;
use App\Purchase;

class PurchaseController extends Controller
{
    public function index()
    {
        $purchases = Purchase::with(['product', 'payment'])->where('user_id', auth()->user()->id)->get();

        return view('sites.users.purchases', compact('purchases'));
    }

    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'proof' => 'required'
        // ]);

        $cookie = Cookie::get('cart');

        $carts = json_decode($cookie);

        $products = Product::find($carts);

        foreach ($products as $product) {
            $product->update([
                'sold_out' => $product->sold_out + 1
            ]);
        }

        $file = $request->file('proof');

        $proof = $file->store('purchases/June2019');

        foreach ($carts as $id => $product_id) {
            Purchase::create([
                'user_id' => auth()->user()->id,
                'product_id' => $product_id,
                'payment_id' => $request->payment_id,
                'proof' => $proof,
                'status' => 'payment',
            ]);
        }

        Cookie::queue(Cookie::forget('cart'));
        return redirect()->route('purchase.index')->with('msg', 'Payment Success. Wait admin verify your purchase.');
    }
}
