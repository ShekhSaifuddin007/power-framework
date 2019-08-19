<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class FrontController extends Controller
{
    public function getIndex()
    {
        return view('front/home/home');
    }
}