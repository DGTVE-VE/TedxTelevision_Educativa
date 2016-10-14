<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use App\Speaker;

use App\Ponentes;

class TedxController extends Controller {

    public function tedx() {
        $ponentes = Ponentes::all();
        return view('viewTedx/tedx')->with('ponentes',$ponentes);
    }

    public function galeria() {
  
        //key flickr
        // Clave:
        //d6c4d28ee1861c58fa6e8086f63322a0
        //
        //Secreto:
        //6d941f31c6645eb5 
    }

    public function programa($bloq = 1){

        $speakers = Speaker::where('bloq', $bloq)
                            ->orderBy('start', 'asc')
                            ->get();

        return view('viewPrograma/programa', ['speakers' => $speakers]);
    }
       
}

