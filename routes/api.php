<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\Api\EmprestimoController;
use App\Http\Controllers\Api\LoginController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GestorController;
use App\Http\Controllers\Api\ParcelaController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/emprestimos', [EmprestimoController::class, 'listarEmprestimo']);
});

Route::post('login', [LoginController::class, 'autenticar']);

Route::get('/emprestimo/detalhes/{emprestimo}', [EmprestimoController::class, 'detalhamentoEmprestimo']);  

Route::get('/clientes/lista', [ClienteController::class, 'listaClientes']); 

Route::get('/parcelas/{emprestimo}', [ParcelaController::class, 'listarParcelas']);