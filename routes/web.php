<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controllerRate;

Route::get('/', function () {
    return view('index');
})->name('inicio');

Route::get('/pessoas', [controllerRate::class, 'index'])->name('indexPessoas');
Route::get('/pessoas/novo', [controllerRate::class, 'create'])->name('novoPessoa');
Route::post('/pessoas', [controllerRate::class, 'store'])->name('gravarNovoPessoa');
Route::get('/pessoas/apagar/{id}', [controllerRate::class, 'destroy'])->name('deletaPessoa');
Route::get('/pessoas/editar/{id}', [controllerRate::class, 'edit'])->name('editaPessoa');
Route::post('/pessoas/{id}', [controllerRate::class, 'update'])->name('atualizaPessoa');
Route::get('/pessoas/pesquisa', [controllerRate::class, 'pesquisarPessoa'])->name('pesquisarPessoa');
Route::get('/pessoas/procura', [controllerRate::class, 'procurarPessoa'])->name('procurarPessoa');
