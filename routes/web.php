<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\LoginController;
use App\Http\Middleware\LogAcessoMiddleware;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [\App\Http\Controllers\PrincipalController::class, 'principal'])->name('site.index');

Route::get('/sobre-nos', [\App\Http\Controllers\SobreNosController::class,'sobrenos'])->name('site.sobrenos');

Route::get('/contato', [ContatoController::class,'contato'])->name('site.contato');
Route::post('/contato', [ContatoController::class,'gravar'])->name('site.contato');

Route::get('/login/{erro?}', [LoginController::class,'index'])->name('site.login');
Route::post('/login', [LoginController::class,'autenticar'])->name('site.login');

Route::middleware('autenticacao')->prefix('/app')->group(function(){
    Route::get('/home',[\App\Http\Controllers\HomeController::class,'index'])->name('app.home');
    Route::get('/sair',[LoginController::class,'sair'])->name('app.sair');
    Route::get('/chamado', [App\Http\Controllers\ChamadoController::class, 'index'])->name('app.chamado');
    
    Route::get('/tecnicos',[\App\Http\Controllers\TecnicoController::class,'index'])->name('app.tecnico');
    Route::get('/tecnico/consulta',[\App\Http\Controllers\TecnicoController::class,'listar'])->name('app.tecnico.listar');
    Route::post('/tecnico/listar',[\App\Http\Controllers\TecnicoController::class,'listar'])->name('app.tecnico.listar');
    Route::get('/tecnico/adicionar',[\App\Http\Controllers\TecnicoController::class,'adicionar'])->name('app.tecnico.adicionar');
    Route::post('/tecnico/adicionar',[\App\Http\Controllers\TecnicoController::class,'adicionar'])->name('app.tecnico.adicionar');
    Route::get('/tecnico/editar/{id}',[\App\Http\Controllers\TecnicoController::class,'editar'])->name('app.tecnico.editar');



    Route::get('/produto',[\App\Http\Controllers\ProdutoController::class,'index'])->name('app.produto');
});