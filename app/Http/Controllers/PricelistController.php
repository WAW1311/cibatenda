<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PricelistController extends Controller
{
    public function index() {

        return view('pricelist/index');
    }
}
