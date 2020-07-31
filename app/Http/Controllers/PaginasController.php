<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginasController extends Controller

{
    public function inicio () {

        return view ('welcome');
    }



    public function quienes_somos () {

        return view ('quienes_somos');
    }



    public function donde_estamos () {

        return view ('donde_estamos');
    }



    public function foro () {

        return view ('foro');
    }

}