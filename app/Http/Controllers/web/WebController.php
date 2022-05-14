<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebController extends Controller
{
    //En caso de utilizar Vue.js

    // public function index()
    // {
    //     return view('web.index');
    // }

    // public function detail()
    // {
    //     return view('web.index');
    // }
    // public function post_category()
    // {
    //     return view('web.index');
    // }
    // public function contact()
    // {
    //     return view('web.index');
    // }

    public function index()
    {
        return view('welcome');
    }
}
