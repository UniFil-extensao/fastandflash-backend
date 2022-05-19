<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatoController;
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

Route::middleware(LogAcessoMiddleware::class)
->get('/', [\App\Http\Controllers\PrincipalController::class, 'principal'])
->name('site.index');

Route::get('/sobre-nos', [\App\Http\Controllers\SobreNosController::class,'sobrenos'])->name('site.sobrenos');

Route::get('/contato', [ContatoController::class,'contato'])->name('site.contato');
Route::post('/contato', [ContatoController::class,'gravar'])->name('site.contato');

Route::get('/login', [ContatoController::class,'login'])->name('site.login');

Route::prefix('/app')->group(function(){
    Route::middleware(LogAcessoMiddleware::class, 'autenticacao')
        ->get('/clientes', function(){return 'CLIENTES';})
        ->name('app.clientes');
    Route::get('/fornecedores', [\App\Http\Controllers\FornecedorController::class,'index'])->name('app.fornecedores');
    Route::get('/produtos', [\App\Http\Controllers\ProdutoController::class,'produtos'])->name('app.produtos');
});

Route::get('/teste/{p1}/{p2}', [\App\Http\Controllers\TesteController::class,'teste'])->name('teste');
