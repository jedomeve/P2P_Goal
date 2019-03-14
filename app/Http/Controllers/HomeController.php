<?php

namespace App\Http\Controllers;

use App\ProductModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
		{
		    $products = ProductModel::all();
			return view('home', ['products' => $products ]);
		}

		public function buy(ProductModel $product)
        {
            return view('form_buy', [ 'product' => $product] );
        }
}
