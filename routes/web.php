<?php
//routes admin
Route::group(['prefix' => 'panel', 'middleware' => ['auth']], function () {
    Route::get('/', 'Panel\Admin\HomeController@index')->name('admin.index');
    //evento
    Route::get('evento/', 'Panel\Admin\HomeController@index')->name('evento.index');
    //transmissao
    Route::get('transmissao/', 'Panel\User\TransmissaoController@index')->name('panel.user.transmissao');
    //palestrante
    Route::get('palestrante/', 'Panel\Admin\HomeController@index')->name('palestrante.index');
    //enquete
    Route::get('enquete/', 'Panel\Admin\HomeController@index')->name('enquete.index');
    //perguntas
    Route::get('perguntas/', 'Panel\Admin\HomeController@index')->name('perguntas.index');
    //chat
    Route::get('chat/', 'Panel\Admin\HomeController@index')->name('chat.index');
});


Auth::routes();
