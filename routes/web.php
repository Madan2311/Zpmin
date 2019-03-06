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

// Route::get('/cliente', function () {
//     return view('cliente');
// });
// Route::get('/pedidos', function () {
//     return view('Pedidos');
// });
// Route::get('/Fpago', function () {
//     return view('Fpago');
// });
// Route::get('/Color', function () {
//     return view('Color');
// });
// Route::get('/Estilo', function () {
//     return view('Estilo');
// });
// Route::get('/Talla', function () {
//     return view('Talla');
// });
// Route::get('/Fpedido', function () {
//          return view('Form.pedidos.Fpedido');
// });
// Route::get('/FFpago', function () {
//     return view('Form.Fpago.FFpago');
// });
// Route::get('/Fclientes', function () {
//     return view('Form.Clientes.Fclientes');
// });
// Route::get('/Fcolor', function () {
//     return view('Form.Fcolor.Fcolor');
// });
// Route::get('/Festilo', function () {
//     return view('Form.Estilo.Festilo');
// });
// Route::get('/Ftalla', function () {
//     return view('Form.Talla.Ftalla');
// });
Route::get('/','ClientesController@index');
