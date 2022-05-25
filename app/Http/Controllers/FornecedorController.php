<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fornecedor;

class FornecedorController extends Controller
{
    public function index(){
        return view('app.fornecedor.index');
    }

    public function listar(Request $request){

        $fornecedores = Fornecedor::where('nome', 'like', '%'.$request->nome.'%')
        ->where('site', 'like', '%'.$request->site.'%')
        ->where('uf', 'like', '%'.$request->uf.'%')
        ->where('email', 'like', '%'.$request->email.'%')
        ->get();

        return view('app.fornecedor.listar', ['fornecedores'=>$fornecedores]);
    }

    public function adicionar(Request $request){

        $resposta = '';

        if($request->_token != "" && $request->id == ""){

            $regras = [
                'nome'=>'required|min:5|max:50',
                'site'=>'required|min:2',
                'uf'=>'required|min:2|max:2',
                'email'=>'email'     
            ];

            $feedback = [
                'required'=>'O campo :attribute deve ser preenchido', 
                'nome.min'=>'O campo nome deve ter no mínimo 5 caracteres',
                'nome.max'=>'O campo nome deve ter no máximo 50 caracteres',
                'site.min'=>'O campo site deve ter no mínimo 2 caracteres',
                'email'=>'Insira um email válido',
                'uf.min'=>'O campo uf deve ter no mínimo 2 caracteres',
                'uf.max'=>'O campo uf deve ter no máximo 2 caracteres',
            ];
            $request->validate($regras, $feedback);

            Fornecedor::create($request->all());

            $resposta = 'Cadastro Realizado com sucesso';
        }elseif ($request->_token != "" && $request->id != "") {
            $fornecedor = Fornecedor::find($request->id);
            $update = $fornecedor->update($request->all());

            if ($update) {
                $resposta = 'Atualizado com sucesso';
            }else {
                $resposta = 'Atualização falhou';
            }

        }
        return view('app.fornecedor.adicionar',['resposta'=> $resposta]);
    }

    public function editar($id){
        $fornecedor = Fornecedor::find($id);
        return view('app.fornecedor.adicionar', ['fornecedor' => $fornecedor]);
    }
}
