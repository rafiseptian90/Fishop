<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cookie;

class CartController extends Controller
{
    public function index()
    {
        return view('sites.cart');
    }

    public function store(Request $request)
    {
        $cookie = Cookie::get('cart');

        $cart = json_decode($cookie);

        if ($cart) {
            array_push($cart, $request->id);
        } else {
            $cart = [$request->id];
        }

        Cookie::queue('cart', json_encode($cart), 60);

        return response(['cart' => count($cart)]);
    }

    public function cancel(Request $request)
    {
        $cart = json_decode(Cookie::get('cart'));

        array_splice($cart, $request->id, 1);

        Cookie::queue('cart', json_encode($cart), 60);

        return response()->json([
            'msg' => 'Cancel Sucessfull',
            'cart' => count($cart)
        ]);
    }
}
