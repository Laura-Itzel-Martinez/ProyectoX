<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TablaCursosController extends Controller
{
    public function tablaCursos(){
        return view('tablaCursos');
    }
}
