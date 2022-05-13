<?php

namespace App\Http\Controllers;
use App\Models\SiteContato;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function contato(){
        // var_dump($_POST);
        // print_r($request->all());
        // $contato = new SiteContato();
        // $contato->nome = $request->input('nome');   
        // $contato->telefone = $request->input('telefone');   
        // $contato->email = $request->input('email');   
        // $contato->motivo_contato = $request->input('motivo_contato');
        // $contato->mensagem = $request->input('mensagem');     
        // $contato->save(); 
        // $contato->fill($request->all());
        // $contato->save();
        // print_r($contato->getAttributes());
        $motivo_contatos = [
            '1'=>'Dúvida',
            '2'=>'Elogio',
            '3'=>'Reclamação'
        ];
        return view('site.contato',['motivo_contatos'=>$motivo_contatos]); 
    }

    public function gravar(Request $request){
        $request->validate([
            'nome' => 'required|max:50',
            'telefone' => 'required',
            'email' => 'required',
            'motivo_contato'=> 'required',
            'mensagem' => 'required|max:2000'
        ]);
    }
}
