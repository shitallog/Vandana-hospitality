<?php

namespace App\Http\Controllers;
use App\Models\Job;

use Illuminate\Http\Request;

class CareerController extends Controller
{
 public function index()
    {
        $jobs = Job::all();
        return view('frontend.careers', compact('jobs'));
    }
}
