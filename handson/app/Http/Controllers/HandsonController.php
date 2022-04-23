<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HandsonController extends Controller
{
    public function index(Request $request) {
        return "this is index() in handson";
    }
}
