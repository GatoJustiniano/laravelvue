<?php

namespace App\Http\Controllers\dashboard;

use Illuminate\Http\Request;
use App\Services\CartService;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public $cartService;

    public function __construct(CartService $cartService)
    {
        $this->cartService = $cartService;

        $this->middleware('auth');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cart = $this->cartService->getFromCookie();

        if (!isset($cart) || $cart->products->isEmpty()) {
            return redirect()
                ->back()
                ->withErrors("Your cart is empty!");
        }

        return view('dashboard.orders.create')->with([
            'cart' => $cart,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return DB::transaction(function() use($request) {
            $user = $request->user();

            $order = $user->orders()->create([
                'status' => 'pending',
            ]);

            $cart = $this->cartService->getFromCookie();

            $cartProductsWithQuantity = $cart
                ->products
                ->mapWithKeys(function ($product) {
                    $quantity = $product->pivot->quantity;

                    if ($product->stock < $quantity) {
                        throw ValidationException::withMessages([
                            'product' => "There is not enough stock for the quantity you required of {$product->title}",
                        ]);
                    }

                    $product->decrement('stock', $quantity);
                    $element[$product->id] = ['quantity' => $quantity];

                    return $element;
                });

            $order->products()->attach($cartProductsWithQuantity->toArray());

            return redirect()->route('orders.payments.create', ['order' => $order]);
        }, 5);
    }
}
