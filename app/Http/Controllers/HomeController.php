<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class HomeController extends Controller
{
    public function home()
    {
        return view('/pages/index');
    }
    public function gettingStarted()
    {
        return view('/pages/getting-started');
    }
    public function about()
    {
        return view('/pages/about-us');
    }
}