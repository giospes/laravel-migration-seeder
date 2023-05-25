<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;
use Illuminate\Support\Carbon;
class TrainController extends Controller
{
    public function trainToday(){
        $trains = Train::whereDate('departure_time', Carbon::today())->get();
        return view('home', compact('trains'));
    }

}
