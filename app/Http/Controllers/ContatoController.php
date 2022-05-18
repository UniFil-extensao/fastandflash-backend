<?php

namespace App\Http\Controllers;
use App\Models\SiteContato;
use App\Models\MotivoContato;


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
        $motivo_contatos = MotivoContato::all();
        return view('site.contato',['motivo_contatos'=>$motivo_contatos]); 
    }

    public function gravar(Request $request){
        $request->validate([
            'nome' => 'required|max:50',
            'telefone' => 'required',
            'email' => 'email|unique:site_contatos',
            'motivo_contatos_id'=> 'required',
            'mensagem' => 'required|max:2000'
        ],
        [
            'required'=>'O campo precisa ser preenchido',
            'nome.max'=>'O nome não pode ultrapassar 50 caracteres',
            'email.email' => 'Não é um endereço de email válido',
            'email.unique' => 'O endereço de email já consta na base de dados',
            'motivo_contatos_id.required' => 'Selecione o motivo do contato',
            'mensagem.max' => 'A mensagem não pode ultrapassar 2000 caracteres'
        ]);
        SiteContato::create($request->all());
        return redirect()->route('site.index');

    }
}
