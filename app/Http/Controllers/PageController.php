<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;
use Spatie\FlareClient\View;
use Carbon\Carbon;
class PageController extends Controller
{
    public function home(){
        $now = now();
        $trains = Train::where('date', '>=', $now)->get();
        return view('pages.home', compact('trains'));
    }
}
