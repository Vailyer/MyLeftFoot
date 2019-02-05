<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('/pages/index');
    }

    public function contact()
    {
        return view('/pages/contactus');
    }
}
