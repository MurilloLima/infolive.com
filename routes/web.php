<?php
//routes admin
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'Panel\Admin\HomeController@index')->name('admin.index');

    //cliente
    Route::get('clientes/', 'Panel\Admin\ClientController@index')->name('clientes.index');
    Route::get('cliente/create/', 'Panel\Admin\ClientController@create')->name('cliente.create');
    Route::post('cliente/', 'Panel\Admin\ClientController@store')->name('cliente.store');
    Route::get('cliente/edit/{id}', 'Panel\Admin\ClientController@edit')->name('cliente.edit');
    Route::post('cliente/update/{id}', 'Panel\Admin\ClientController@update')->name('cliente.update');
    Route::get('cliente/delete/{id}', 'Panel\Admin\ClientController@destroy')->name('cliente.destroy');

    Route::get('agenda/', 'Panel\Admin\AgendaController@index')->name('agenda.index');
    Route::get('agenda/create/', 'Panel\Admin\AgendaController@create')->name('agenda.create');
    Route::post('agenda/store/', 'Panel\Admin\AgendaController@store')->name('agenda.store');
    Route::get('agenda/edit/{id}', 'Panel\Admin\AgendaController@edit')->name('agenda.edit');
    Route::post('agenda/update/{id}', 'Panel\Admin\AgendaController@update')->name('agenda.update');
    Route::get('agenda/delete/{id}', 'Panel\Admin\AgendaController@destroy')->name('agenda.destroy');
    Route::get('agenda/view/{id}', 'Panel\Admin\AgendaController@view')->name('agenda.view');
});


Auth::routes();
