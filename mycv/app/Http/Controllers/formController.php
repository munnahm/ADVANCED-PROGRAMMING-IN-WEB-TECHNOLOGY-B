<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formController extends Controller
{
    //

    public function registration(){
        return view('userForms.registration');
    }
}
