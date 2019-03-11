<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::namespace('Admin')->group(function(){
    Route::get('/admin/getusers', 'UsuarioController@getUser');
    Route::put('/admin/lbuser/{id}', 'UsuarioController@liberarBloquearUser');
    Route::get('/admin/getinstituicao', 'InstituicaoController@getInstituicao');
    Route::get('/admin/getdados', 'HomeController@getDados');
});

Route::namespace('Entitie')->group(function(){
    Route::get('/entitie/getdados', 'HomeController@getDados');
    Route::get('/entitie/getalunos', 'AlunoController@getAlunos');
});
