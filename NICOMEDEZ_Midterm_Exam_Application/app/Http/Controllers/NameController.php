<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutMeController extends Controller
{
    public function index(){
        $about = array(
            "name" => "iPhone15",
        );
        return view('name', $name);
    }
}