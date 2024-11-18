<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Moto;

class MotoController extends Controller
{
    public function index(){

        $motos = Moto::where('motor_volume', '>', 650)->get();
        foreach ($motos as $moto){
            dump($moto->name);
        }
        dd('end');
    }

    public function create(){
        
    }
}



