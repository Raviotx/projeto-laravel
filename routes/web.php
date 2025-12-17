<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TarefaController;

Route::get('/', function() {
    return redirect()->route('tarefas.index');
});

Route::resource('tarefas', TarefaController::class);
