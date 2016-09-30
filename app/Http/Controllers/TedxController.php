<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class TedxController extends Controller {

    public function tedx() {
        return view('viewTedx/tedx');
    }

    public function galeria() {
  
        //key flickr
        // Clave:
        //d6c4d28ee1861c58fa6e8086f63322a0
        //
        //Secreto:
        //6d941f31c6645eb5 
    }

}
