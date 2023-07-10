<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $productsBy = Product::orderByDesc('id')->where('market_type', 'by')->paginate(10);
        $productsSell = Product::orderByDesc('id')->where('market_type', 'sell')->paginate(10);
        return view('welcome', compact('productsBy', 'productsSell'));
    }
}
