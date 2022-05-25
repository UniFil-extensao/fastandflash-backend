<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function index(Request $request){

        $erro = $request->get('erro');
        if($erro == 1){
            $erro='Usuário e/ou senha não existe';
        }elseif($erro == 2){
            $erro='Necessário logar para acessar a página';
        }

        return view('site.login',['titulo'=>'login', 'erro'=>$erro]);        
    }

    public function autenticar(Request $request){
        $regras = [
            'usuario' => 'email',
            'senha' => 'required|min:4|max:40'
        ];
        $validar = [
            'usuario.email' => 'Email inválido',
            'senha.required' => 'O campo senha é obrigatório',
            'senha.max' => 'Máximo 40 caracteres para senha',
            'senha.min' => 'Mínimo 4 caracteres para senha',
        ];

        $request->validate($regras,$validar);

        $email = $request->get('usuario');
        $password = $request->get('senha');
        
        $user = new User;
        $usuario = $user->where('email', $email)->where('password',$password)->get()->first();

        if (isset($usuario->name)){
            session_start();
            $_SESSION['nome'] = $usuario->name;
            $_SESSION['email'] = $usuario->email;

            return redirect()->route('app.tecnico', ['erro' => 1]);
        }else{
            return redirect()->route('site.login', ['erro' => 1]);
        }

    }
    public function sair(){
        session_destroy();
        return redirect()->route('site.login');
    }
}
