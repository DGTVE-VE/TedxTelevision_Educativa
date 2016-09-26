<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TedxController extends Controller
{
    public function tedx() {
        return view('viewTedx/tedx');
    }
}
