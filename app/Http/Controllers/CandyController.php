<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candy;

class CandyController extends Controller
{
    // public function index()
    // {
    //     $products = Candy::all(); // Fetch all products from the database

    //     return view('test.products-test', compact('products')); // Pass data to the view
    // }
    public function frontPage()
    {
        $products = Candy::all(); // Fetch all products from the database

        return view('products.productListPage', compact('products')); // Pass data to the view
    }
    public function separateProduct($id)
    {
    $product = Candy::find($id);

    return view('products.productDetailsPage', compact('product'));
    }

    // public function addProductToCart($id)
    // {
    //     $product = Candy::findofFail($id);
    //     $cart = session()->get('cart', []);
    //     if (isset($cart[$id])) {
    //         $cart[$id]['quantity']++;
    //     } else {
    //         $cart[$id] = [
    //             'name' => $product->name,
    //             'price' => $product->price,
    //             'quantity' => 1,
    //             'image' => $product->image
    //         ];
    //     }
    //     session()->put('cart', $cart);
    //     return redirect()->back()->with('success', 'Product added to cart!');
    // }
}
