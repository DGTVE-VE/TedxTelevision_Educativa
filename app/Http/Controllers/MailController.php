<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
//use Session;
use Redirect;

use App\Http\Requests;

class MailController extends Controller
{
    public function store(Request $request){
    	Mail::send('emails.contact', $request->all(), function( $msj ){
    		$msj->subject('Correo de Contacto');
    		$msj->to('vin.cfs@televisioneducativa.gob.mx');
    	});

    	//Session::flash('message', 'Mensaje enviado correctamente');
    	return Redirect::to('/');
    }
}
