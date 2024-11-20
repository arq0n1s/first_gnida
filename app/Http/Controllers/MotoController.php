<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Moto;

class MotoController extends Controller
{
    public function index(){

        $motos = Moto::all();
        return view('motos', compact ('motos'));
    }

    public function create(){
        
    }
}



