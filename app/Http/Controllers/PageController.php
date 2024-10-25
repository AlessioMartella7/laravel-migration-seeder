<?php

namespace App\Http\Controllers;

use App\Models\Trains;
use Illuminate\Http\Request;
use Spatie\FlareClient\View;

class PageController extends Controller
{
    public function home(){
        $now = now();
        $trains = Trains::where('date', '>=', $now)->get();
        return view('pages.home', compact('trains','now'));
    }
}
