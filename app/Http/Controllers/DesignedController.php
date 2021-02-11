<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DesignedController extends Controller
{
    public function __invoke() { return view('designed');}
}
