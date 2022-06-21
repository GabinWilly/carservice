<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DetailController extends Controller
{
    public function detail(){
        return view('detail.index');
    }
     
    // public function reservations(Car $cars)
    // {
    //     $reservations = new Reservation();

    //     $reservations->name_user = Auth::user()->name;
        
    //     $reservations->marque_cars = $cars->marque;
        
    //     $reservations->save();

        
    //     return redirect()->route('article.index');
    // }
}
