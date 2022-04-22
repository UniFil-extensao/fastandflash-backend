<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function teste(int $parametro1 , int $parametro2){
        // echo "a soma dos valores $parametro1 + $parametro2 é:". ($parametro1 + $parametro2);
        // return view('site.teste', ['parametro1'=> $parametro1, 'parametro2'=> $parametro2]); passagem de parametro pelo metodo do array associativo
        // return view('site.teste', compact('parametro1', 'parametro2')); passagem pelo metodo compact()
        return view('site.teste')->with('parametro1', $parametro1)->with('parametro2', $parametro2);/// metodo with()
    }
}
