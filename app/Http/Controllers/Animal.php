<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;

class Animal extends Controller
{
    function animal(){
        return view('animal');
    }

    function addAnimal(Request $request){
        // dd($request->all());

        $animal = new Animal();
        $animal->create($request->all());

        return view('animal');
    }
}
