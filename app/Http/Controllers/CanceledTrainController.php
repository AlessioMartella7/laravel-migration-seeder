<?php

namespace App\Http\Controllers;

use App\Models\CanceledTrain;
use Illuminate\Http\Request;

class CanceledTrainController extends Controller
{
    public function index()
    {
        $canceledTrains = CanceledTrain::all();
        return view('canceled_trains.index', compact('canceledTrains'));
    }
}
