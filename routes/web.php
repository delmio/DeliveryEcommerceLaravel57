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

Route::get('/',function(){return view('MasterPageHome');});

Route::post('/ValidarUsuario','UsuariosController@ValidarUsuario');
Route::get('/LogOutUser','UsuariosController@LogOut');
Route::get('/LoginUser',function(){return view('LoginUser');});

Route::group(['middleware'=>'CheckLogin'],function(){
    Route::get('/Admin',function(){return view('Admin');});
    Route::get('/CategoriasProductos','CategoriasProductosController@List');
    Route::post('/AgregarNuevaCategoria','CategoriasProductosController@Add');
    Route::get('/Editar/{id}',['uses'=>'CategoriasProductosController@GetEditedProduct','as'=>'EditarCategoriaStep1']);
    Route::post('Edit','CategoriasProductosController@Editar');
    Route::post('/AgregarProducto','ProductosController@AgregarProducto');
    Route::get('/Productos','ProductosController@List');
    Route::get('/BodegaIngreso','ProductosController@ListStock');    
    Route::post('/AgregarStockProducto','ProductosController@AgregarStock');
});

