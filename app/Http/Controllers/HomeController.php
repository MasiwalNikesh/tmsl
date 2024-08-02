<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $country = session('country', 'default');
        return view("home.$country.index");
    }
}
