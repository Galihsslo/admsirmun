<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SekertarisController extends Controller
{
    public function index()
    {
        return view('sekertaris.index');

    }
}
