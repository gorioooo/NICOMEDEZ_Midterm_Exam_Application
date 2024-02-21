<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HobbiesController extends Controller
{
    public function index(){
        $data = "12-megapixel, 4k Video Capture, A16Bionic";
        return view("description", ["description" => $data]);
    }
}