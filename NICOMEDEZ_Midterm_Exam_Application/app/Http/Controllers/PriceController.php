<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillsController extends Controller
{
      public function index(){
        $skills = array(
            "price_one" => "128GB RAM - $704.99",
            "price_two" => "256GB RAM - $767.70",
            "price_three" => "512GB RAM - $1,399.00"
        );
        return view('price', $price);
    }
}