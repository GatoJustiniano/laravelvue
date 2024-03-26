<?php

namespace App\Http\Controllers\dashboard;

use Illuminate\Http\Request;
use App\Services\CartService;

use App\Http\Controllers\Controller;

class CartController extends Controller
{
    public $cartService;

    public function __construct(CartService $cartService)
    {
        $this->cartService = $cartService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.carts.index')->with([
            'cart' => $this->cartService->getFromCookie(),
        ]);
    }
}
