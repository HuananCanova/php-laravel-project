<?php

use App\Models\Funcionario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::post('/cadastrar-funcionario', function(Request $request) {
    
    Funcionario::create([
        'nome' => $request->nome, 
        'salario' => $request->salario
    ]);
    echo "Funcionário cadastrado com sucesso!";
});


Route::get('/visualizar-funcionario/{id}', function ($id) {
    
    $funcionario = Funcionario::find($id);
    return view('visualizar', ['funcionario' => $funcionario]);
});

Route::get('/editar-funcionario/{id}', function ($id) {
    
    $funcionario = Funcionario::find($id);
    return view('editar', ['funcionario' => $funcionario]);
});


Route::post('/editar-funcionario/{id}', function(Request $request, $id) {
    
    $funcionario = Funcionario::find($id);
    $funcionario->update([
        'nome' => $request->nome, 
        'salario' => $request->salario
    ]);

    echo "Funcionário editado com sucesso!";
});

Route::get('/excluir-funcionario/{id}', function($id) {
    
    $funcionario = Funcionario::find($id);
    $funcionario->delete($id);

    echo "Funcionário excluido com sucesso!";
});