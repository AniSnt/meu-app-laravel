<?php
use App\Http\Controllers\OlaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TarefaController;

Route::get('/', function () {
    return view('welcome');
});

 Route::get('/ola/{nome?}', [OlaController::class, 'index']);
 Route::get('/tchau/{nome?}', [OlaController::class, 'tchau']);
 Route::resource('tarefas', TarefaController::class)->except('show');