<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class TecnicoController extends Controller
{
    public function index(){
        
        $msg = " ";
        $tecnicos = User::where('tip_acess', '<', '2')->get();
        return view('app.tecnico.index', ['tecnicos'=>$tecnicos, 'msg' => $msg]);
    }

    public function listar(Request $request){
        
        $msg = " ";
        $tecnicos = User::where('name', 'like', '%'.$request->name.'%')
        ->where('email', 'like', '%'.$request->email.'%')-paginate(8);
        return view('app.tecnico.consulta', ['tecnicos'=>$tecnicos, 'msg' => $msg]);
    }

    public function adicionar(Request $request){

        $msg = " ";

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
            return redirect()->route('app.tecnico',['msg'=> $msg]);

            $msg = 'Cadastro Realizado com sucesso';
        }elseif ($request->_token != "" && $request->id != "") {
            $tecnicos = User::find($request->id);
            $update = $tecnicos->update($request->all());

            if ($update) {
                return redirect()->route('app.tecnico',['msg'=> $msg]);
            }else {
                $msg = 'Atualização falhou';
            }

        }
        return view('app.tecnico.adicionar',['msg' => $msg]);
    }

    public function editar($id){
        $msg = " ";
        $tecnicos = User::find($id);
        return view('app.tecnico.adicionar', ['tecnicos' => $tecnicos, 'msg' => $msg]);
    }

    public function excluir($id){
        User::find($id)->delete();
        
        return redirect()->route('app.tecnico');
    }
}
