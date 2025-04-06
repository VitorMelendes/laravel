<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;
class Adocao extends Controller
{
    function adocao(){
        return view('adocao');
    }

    function registrarAnimal(Request $request){
       
        $animal = new Animal();
        $animal ->create($request->all());

        return view('detalhes-animal');
    }
}
