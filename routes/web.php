<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunosController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TreinoController;

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
    return redirect('/login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/aluno', [AlunosController::class, 'index'])->name('alunos');
    Route::get('/aluno/cadastrar', [AlunosController::class, 'create'])->name('aluno.create');
    Route::post('/aluno/store', [AlunosController::class, 'store'])->name('aluno.store');
    Route::get('/aluno/editar/{aluno}', [AlunosController::class, 'edit'])->name('aluno.edit');
    Route::post('/aluno/editar/{aluno}/', [AlunosController::class, 'update'])->name('aluno.update');
    Route::get('/aluno/visualizar/{aluno}', [AlunosController::class, 'show'])->name('aluno.show');
    Route::get('/aluno/excluir/{aluno}', [AlunosController::class, 'destroy'])->name('aluno.destroy');

    Route::get('/funcionario', [UserController::class, 'index'])->name('funcionarios');
    Route::get('/funcionario/visualizar/{funcionarioID}', [UserController::class, 'show'])->name('funcionario.show');
    Route::get('/funcionario/editar/{funcionarioID}', [UserController::class, 'edit'])->name('funcionario.edit');
    Route::post('/funcionario/editar/{funcionarioID}', [UserController::class, 'update'])->name('funcionario.update');
    Route::get('/funcionario/excluir/{funcionarioID}', [UserController::class, 'destroy'])->name('funcionario.destroy');

    Route::get('/treino', [TreinoController::class, 'index'])->name('treinos');
    Route::get('/treino/cadastrar', [TreinoController::class, 'create'])->name('treino.create');
    Route::post('/treino/cadastrar', [TreinoController::class, 'store'])->name('treino.store');
    Route::get('/treino/visualizar/{treinoID}', [TreinoController::class, 'show'])->name('treino.show');
    Route::get('/treino/editar/{treinoID}', [TreinoController::class, 'edit'])->name('treino.edit');
    Route::post('/treino/editar/{treinoID}', [TreinoController::class, 'update'])->name('treino.update');;
    Route::get('/treino/excluir/{treinoID}', [TreinoController::class, 'destroy'])->name('treino.destroy');
});

Route::get('/test', function (){return view('test');});

require __DIR__.'/auth.php';
