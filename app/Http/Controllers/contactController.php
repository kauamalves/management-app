<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contactController extends Controller
{
    public function contact(){
        return view('site.contact', ['pageTitle' => 'Contato']);
    }
}
