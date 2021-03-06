<?php

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

Auth::routes(['verify' => true]);


Route::middleware(['auth', 'verified'])->group(function(){
    Route::get('/home', 'HomeController@index')->name('home');
    
    Route::namespace('Admin')->group(function(){
        Route::get('/admin', 'HomeController@index')->name('adminhome');
    });

    Route::namespace('Dce')->group(function(){
        Route::get('/dce', 'HomeController@index')->name('dcehome');
    });

    Route::namespace('Entitie')->group(function(){
        Route::get('/entitie', 'HomeController@index')->name('entitiehome');
        Route::get('/entitie/cadastraraluno', 'AlunoController@showCadastro')->name('entitiecadastroaluno');
        Route::post('/entitie/cadastraraluno', 'AlunoController@cadastroAluno');
    });

});

Route::get('/tests', 'Entitie\AlunoController@getAlunos');