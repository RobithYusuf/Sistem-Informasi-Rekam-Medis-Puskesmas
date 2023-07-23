<?php

namespace App\Http\Controllers;

use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
}