<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class BienController extends Controller
{
   public function index()
   {
      $imgs = Car::all();
       dd($imgs);
      return view('bien.index',compact('imgs'));
   }
}
