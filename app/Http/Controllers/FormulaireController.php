<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Image;
use Illuminate\Http\Request;

class FormulaireController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('formulaire.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cars = new Car();
        
        $cars->name = $request->name;
        
        $cars->marque = $request->marque;
        
        $cars->prix = $request->prix;
        
        $cars->km = $request->km;

        $file  = $request->file('imgFile')[0];
        
        $newFileName = $file->getClientOriginalName();

        $cars->photo = $newFileName;
        
        $cars->save();

        
        
        foreach($request->file('imgFile') as $image){
            
            $newFileName = $image->getClientOriginalName();
            $image->move(public_path('photos'), $newFileName);
            
            $photos = new Image();

            $photos->photo = $newFileName;

            $photos->car_id = $cars->id;

            $photos->save();
        }

        $imgs = Car::all();
        return redirect()->route('bien.index',compact('imgs'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function affichecar(Car $car)
    {
        $images = Image::all();
        return view('detail.index', compact('car', 'images'));
    }
    
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
