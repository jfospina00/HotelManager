<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//      return view('app');
// });
Route::get('/','HomeController@index');

//Ruta Dashboard
Route::get('/dashboard','DashController@index');
Route::resource('/dashboard', 'DashboardController');

//Ruta Mis Reservas
Route::get('/Rooms','myReservesController@index');
Route::resource('/Rooms', 'MyReservesController');

//Ruta Reserva de Salones para eventos
Route::get('/ReserveHall','myReservesHallController@index');
//Route::resource('/ReserveHall', 'MyReservesHallController');

// ================== RUTAS AJAX ==================
Route::post('/ajax/tr','AjaxController@searchReserve');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController'
]);

