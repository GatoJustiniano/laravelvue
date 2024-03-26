<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Services\CartService;

class ProductCartController extends Controller
{    
    public $cartService;

    public function __construct(CartService $cartService)
    {
        $this->cartService = $cartService;
    }

    public function store(Request $request, Product $product)
    {
        $cart = $this->cartService->getFromCookieOrCreate();

        $quantity = $cart->products()
            ->find($product->id)
            ->pivot
            ->quantity ?? 0;

        if ($product->stock < $quantity + 1) {
            throw ValidationException::withMessages([
                'product' => "No hay stock suficiente para la cantidad que requerías de: {$product->title}",
            ]);
        }

        $cart->products()->syncWithoutDetaching([
            $product->id => ['quantity' => $quantity + 1],
        ]);

        $cart->touch();
        $cookie = $this->cartService->makeCookie($cart);

        return redirect()->back()->cookie($cookie);
    }

    public function destroy(Product $product, Cart $cart)
    {
        $cart->products()->detach($product->id);
        $cart->touch();
        $cookie = $this->cartService->makeCookie($cart);

        return redirect()->back()->cookie($cookie);
    }
}
