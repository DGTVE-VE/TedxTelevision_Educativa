<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use App\Speaker;
use App\Email;


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

    public function email(Request $request){
        $flag = false;
        if( $request->isMethod("post") && $request->has("name") ){
            $name = $request->input('name');
            $email = $request->input('email');
            $commit = $request->input('commit');

            DB::table('emails')->insert([
                    'name' => $name,
                    'email' => $email
                ]);
            $flag = true;
        }

        $datos = array(
                'nombre' => $name,
                'correo' => $email,
                'peticion' => $commit
            );

        $url = "172.16.200.9/correo/correoTEDX.php";
        $content = "";
        foreach ($datos as $key => $value) {
            $content .= $key . '=' . $value . '&';
        }

        if( $request->has("name") ){
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_URL, $url);
            curl_setopt($curl, CURLOPT_POST, 1);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $content);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

            $json_response = curl_exec($curl);

            $status = curl_getinfo($curl, CURLINFO_HTTP_CODE);

            curl_close($curl);

        }

        return View('emails/contact', ["flag" => $flag, "name" => $name ]);
    }
       
}

