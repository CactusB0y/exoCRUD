<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function create(){
        return view('create');
    }

    public function store(Request $request){
        $store = new Car;
        $store->nom = $request->nom;
        $store->year = $request->year;
        $store->save();
        dd($request->nom,$request->year);
    }
}
