<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoguinController extends Controller
{
    public function index()
    {
    return view('top');
    }
    public function menta()
    {
        return view('menta');
    }
}
