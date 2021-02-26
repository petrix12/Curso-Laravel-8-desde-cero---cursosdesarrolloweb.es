<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HolaController extends Controller
{
    /* public function __invoke(string $name){
        return "Hols {$name}";
    } */

    public function saludo(string $name): string {
        // return "Hola {$name}";
        return view("saludo", compact("name"));
    }

}
