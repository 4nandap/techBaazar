<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayoutsController extends Controller
{
    public function index(Request $request) {
        return view('welcome');
    }
}
