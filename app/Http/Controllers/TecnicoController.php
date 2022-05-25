<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class TecnicoController extends Controller
{
    public function index(){
        $tecnicos = User::where('tip_acess', '<', '2')->get();
        return view('app.tecnico.index', ['tecnicos'=>$tecnicos]);
    }

    public function listar(Request $request){

        $tecnicos = User::where('name', 'like', '%'.$request->name.'%')
        ->where('email', 'like', '%'.$request->email.'%')-get();
        return view('app.tecnico.consulta', ['tecnicos'=>$tecnicos]);
    }

    public function adicionar(Request $request){

        $resposta = '';

        if($request->_token != "" && $request->id == ""){

            $regras = [
                'name'=>'required|min:5|max:50',
                'email'=>'email',
                'password'=>'required|min:4|max:20',     
            ];

            $feedback = [
                'required'=>'O campo :attribute deve ser preenchido', 
                'name.min'=>'O campo nome deve ter no mínimo 5 caracteres',
                'name.max'=>'O campo nome deve ter no máximo 50 caracteres',
                'email'=>'Insira um email válido',
                'password.min'=>'O campo senha deve ter no mínimo 4 caracteres',
                'password.max'=>'O campo senha deve ter no máximo 20 caracteres',
            ];
            $request->validate($regras, $feedback);

            // dd($request->all());
            User::create($request->all());

            $resposta = 'Cadastro Realizado com sucesso';
        }elseif ($request->_token != "" && $request->id != "") {
            $tecnicos = User::find($request->id);
            $update = $tecnicos->update($request->all());

            if ($update) {
                $resposta = 'Atualizado com sucesso';
            }else {
                $resposta = 'Atualização falhou';
            }

        }
        return view('app.tecnico.adicionar',['resposta'=> $resposta]);
    }

    public function editar($id){
        $tecnicos = Tecnico::find($id);
        return view('app.tecnico.adicionar', ['tecnicos' => $tecnicos]);
    }
}
