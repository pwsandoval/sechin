<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EscritorioController extends Controller
{
    public function index() {
        return view('escritorio');
    }

    public function __construct() {
        $this->middleware('auth');
    }

    
}
