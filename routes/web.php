<?php


Route::get('/', function () {
    return view('auth.login');
});

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

Route::get('/car', 'HomeController@index')->name('home');


Route::get('/car', 'CarController@index');
Route::post('/car', 'CarController@insert')->name('car.insert');
Route::post('/car/{car}', 'CarController@update')->name('car.update');
Route::post('/delete/car/{car}', 'CarController@delete')->name('car.delete');;


Route::get('/client', 'ClientController@index');
Route::post('/client', 'ClientController@insert')->name('client.insert');
Route::post('/client/{client}', 'ClientController@update')->name('client.update');
Route::post('/delete/client/{client}', 'ClientController@delete')->name('client.delete');;

Route::get('/contracts', 'ContractsController@index');
Route::post('/contracts', 'ContractsController@insert')->name('contracts.insert');
Route::post('/contracts/{contracts}', 'ContractsController@update')->name('contracts.update');
Route::post('/delete/contracts/{contracts}', 'ContractsController@delete')->name('contracts.delete');

Route::get('/employee', 'EmployeeController@index');
Route::post('/employee', 'EmployeeController@insert')->name('employee.insert');
Route::post('/employee/{employee}', 'EmployeeController@update')->name('employee.update');
Route::post('/delete/employee/{employee}', 'EmployeeController@delete')->name('employee.delete');;

Route::get('/provider', 'ProviderController@index');
Route::post('/provider', 'ProviderController@insert')->name('provider.insert');
Route::post('/provider/{provider}', 'ProviderController@update')->name('provider.update');
Route::post('/delete/provider/{provider}', 'ProviderController@delete')->name('provider.delete');;
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
