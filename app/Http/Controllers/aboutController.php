<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aboutController extends Controller
{
    public function index()
    {
        return view('frontend.about'); // Points to resources/views/frontend/about.blade.php
    }
}
