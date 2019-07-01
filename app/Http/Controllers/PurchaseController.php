<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cookie;
use App\Product;
use App\Purchase;
use Carbon\Carbon;

class PurchaseController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $purchases = Purchase::with(['product', 'payment'])->where('user_id', auth()->user()->id)->get();

        return view('sites.users.purchases', compact('purchases'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'proof' => 'required|mimes:jpg,png,jpeg|image'
        ]);

        $time = Carbon::now();

        $cookie = Cookie::get('cart');

        $carts = json_decode($cookie);

        $products = Product::find($carts);

        foreach ($products as $product) {
            $product->update([
                'sold_out' => $product->sold_out + 1
            ]);
        }

        $file = $request->file('proof');

        $proof = $file->store('purchases/' . $time->format('FY'));

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

    public function review(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $review = $product->purchase->where('user_id', auth()->user()->id)->first();
        $review->update([
            'review' => $request->review,
            'rate' => $request->rate
        ]);

        $total_rate = $product->purchase->where('rate', '!=', null);
        $total_purchase = count($total_rate);

        $get_purchase = Purchase::where('product_id', $id)->get();

        if ($total_purchase === 0) {
            $total_purchase = 1;
        }

        $rate = 0;

        foreach ($get_purchase as $key => $value) {
            $rate += $value->rate;
        }

        $product->update([
            'rating' => $rate / $total_purchase
        ]);

        return redirect()->back();
    }
}
