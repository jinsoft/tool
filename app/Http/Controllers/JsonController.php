<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JsonController extends Controller
{
    //
    public function index()
    {
        return view('json.index');
    }
}
