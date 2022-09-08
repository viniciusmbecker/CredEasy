<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EmprestimoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\GestorController;
use App\Http\Controllers\ParcelaController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/login', [LoginController::class, 'formularioDeLogin'])
->name('login');
Route::post('/login', [LoginController::class, 'autenticar'])
->name('signin');
Route::get('/logout', [LoginController::class, 'destroy'])
->name('logout');

Route::get('/cliente/formulario', [ClienteController::class, 'formularioDeCadastro'])
->name('cliente.formulario');
Route::post('/cliente', [ClienteController::class, 'cadastrarCliente'])
->name('cliente.cadastrar');


Route::middleware('autenticador')->group(function () {
    Route::get('/cliente/dashboard', [ClienteController::class, 'dashboard'])
    ->name('dashboard');
    
    Route::get('/emprestimo/parcelas/{emprestimo}', [ParcelaController::class, 'listarParcela'])
    ->name('emprestimo.parcelas');

    Route::get('/emprestimo/teste/{emprestimo}', [ParcelaController::class, 'listarEmprestimoComParcela'])
    ->name('emprestimo.comparcela');

    Route::patch('/pagar-parcela/{parcela}', [ParcelaController::class, 'pagarParcela'])
    ->name('parcela.pagar');

    Route::get('/emprestimo-aprovado', [EmprestimoController::class, 'emprestimoAprovado'])
    ->name('emprestimo.aprovado');

    Route::get('/emprestimo/formulario-de-solicitacao', [EmprestimoController::class, 'exibeFormularioDeSolicitacao'])
    ->name('emprestimo.solicitacao');

    Route::post('/emprestimo', [EmprestimoController::class,'registraSolicitacao'])
    ->name('emprestimo.solicitar');

    Route::get('/emprestimo/detalhes/{emprestimo}', [EmprestimoController::class, 'detalhesEmprestimo'])
    ->name('emprestimo.detalhes');

    Route::get('/emprestimo-lista', [EmprestimoController::class, 'listarEmprestimosCliente'])
    ->name('emprestimo.lista-cliente');
    
});

Route::middleware('autenticador.gestor')->group(function () {
    Route::get('/gestor/listar', [GestorController::class, 'index'])
    ->name('lista');
    Route::get('/gestor/tela-inicial', [GestorController::class, 'mostraTelaInicial'])
    ->name('tela.inicial');
    Route::get('gestor/analisa-emprestimo', [GestorController::class, 'listarEmprestimosParaAnalisar'])
    ->name('analisa.emprestimo');
    Route::get('/gestor/todos-emprestimos', [GestorController::class, 'listarTodosOsEmprestimos'])
    ->name('todos.emprestimos');
    Route::get('/gestor/todos-emprestimos-filtro', [GestorController::class, 'filtrar'])
    ->name('todos.emprestimosfiltro');
    Route::get('/gestor/relatorios', [GestorController::class, 'relatorio'])
    ->name('relatorio');
    Route::post('/emprestimo/status/{emprestimo}', [EmprestimoController::class, 'atualizaStatus'])
    ->name('emprestimo.status');
    Route::get('/emprestimo/analisar/{emprestimo}', [EmprestimoController::class, 'analisarEmprestimo'])
    ->name('analisar.emprestimo');

});
