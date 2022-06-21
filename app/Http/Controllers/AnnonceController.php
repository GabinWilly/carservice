<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use App\Models\User;
use App\Notifications\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class AnnonceController extends Controller
{

    public  function __contruct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $ans = Annonce::all()->reject( function ($todos){
        //     return $todos->done==0;
        // });
        $exem = Annonce::all();
        

        $ans = Annonce::paginate(12);

        return view('annonce.index', compact('ans','exem'));
    //     ->count()
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('annonce.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kiris = User::all();
        $annonce = new Annonce();
        
        $annonce->name = $request->name;
        $annonce->description = $request->description;
        $annonce->save();
        Notification::send($kiris, new Test($request->name));
        return redirect()->route('annonce.index');
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
     * @param  Annonce  $annonce
     * @return \Illuminate\Http\Response
     */
    public function edit(Annonce $annonce)
    {
        return view('annonce.edit', compact('annonce'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Annonce $annonce
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Annonce $annonce)
    {
        $annonce->update($request->all());

        return redirect()->route('annonce.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Annonce  $Annonce
     * @return \Illuminate\Http\Response
     */
    public function destroy(Annonce $Annonce)
    {
        $Annonce->delete();
        
        return back();
    }
}
