<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controller1 extends Controller
{
    public function about(){
        return 'Ereen Lourenza Natalia Mamahi - 2141762044';
    }

    public function articles($id){
        return 'Halaman Artikel with ID '.$id;
    }
}
