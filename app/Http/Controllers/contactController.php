<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contactController extends Controller
{
    public function contact(){
        var_dump($_POST);

        return view('site.contact', ['pageTitle' => 'Contato']);
    }
}
