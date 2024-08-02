<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InsightsController extends Controller
{
    public function index()
    {
        $country = session('country', 'default');
        return view("insights.$country.index");
    }
}
