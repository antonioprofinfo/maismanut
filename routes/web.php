<?php

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

Route::get('/user', function () {
    $user = \App\User::all();

    return $user;
});
//Busca todos os dados no banco
Route::get('/user', function () {
    $user = \App\User::all();
    return $user;
});

//Insere dados no banco na tabela user
Route::get('userc', function(){
    $userc = \App\User::Create([
        'name'=>'Flavia Penido',
        'email'=>'123@abc.com',
        'password' => bcrypt('12345678')

     ]) ;
});
//Buscando dados Pessoa
Route::get('/pessoa', function(){
    $cade = \App\Pessoa::all();
        return $cade; //mudar
});

Route::get('/pessoa/setor', function(){
    $enviar = \App\Pessoa::find(1);
    $enviar->setor_id = 31;
    return($enviar)->save();

});



//Buscando dados setorphp
Route::get('/setor', function(){
    $setor = \App\Setor::all();
        return $setor; //mudar
});




