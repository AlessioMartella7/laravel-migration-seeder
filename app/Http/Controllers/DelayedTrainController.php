<?php

namespace App\Http\Controllers;

use App\Models\DelayedTrain;
use Illuminate\Http\Request;

class DelayedTrainController extends Controller
{
    public function index () {
        $delayedTrains = DelayedTrain::all();
        return view('delayed_trains.index', compact('delayedTrains'));
    }
}
