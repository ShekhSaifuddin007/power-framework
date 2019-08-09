<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class FrontController extends Controller
{
    public function getIndex()
    {
        $name = 'Shekh Saifuddin';
        message('success', 'Product Updated!');
        return view('welcome', ['name' => $name]);
    }
}