<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $fillable =[
        'title',
        'description',
        'price',
        'stock',
        'status'
    ];
}
