<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $country = session('country', 'default');
        return view("contact.index");
    }
}
