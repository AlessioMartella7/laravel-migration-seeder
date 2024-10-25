<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\FlareClient\View;

class PageController extends Controller
{
    public function home(){
        return view('pages.home');
    }
}
