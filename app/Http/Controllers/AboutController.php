<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $country = session('country', 'default');
        return view("about.$country.index");
    }
}
