<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            [
                'name' => 'Realme X2 Pro',
                'spec' => '6.5" Super AMOLED Display, 128GB Storage, 8GB RAM',
                'price_range' => '$400 - $500',
            ],
            [
                'name' => 'Realme 7 Pro',
                'spec' => '6.4" Super AMOLED Display, 128GB Storage, 8GB RAM',
                'price_range' => '$300 - $400',
            ],
            [
                'name' => 'Realme 8',
                'spec' => '6.4" Super AMOLED Display, 128GB Storage, 6GB RAM',
                'price_range' => '$200 - $300',
            ],
        ];

        return view('products.index', ['products' => $products]);
    }
}
