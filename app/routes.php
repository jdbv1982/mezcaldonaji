<?php
$locale = Request::segment(1);

if (in_array($locale, Config::get('app.available_locales'))) {
    \App::setLocale($locale);
} else {
    $locale = null;
}

Route::group(array('prefix' => $locale), function()
{

	Route::get(Lang::get('routes.home'),['as'=>'home', 'uses'=>'HomeController@index']);
	Route::get(Lang::get('routes.salir'),['as'=>'salir', 'uses'=>'HomeController@salir']);
	Route::get(Lang::get('routes.SI'), ['as'=>'SI', 'uses'=>'HomeController@SI']);

	Route::group(array('before'=>'edad'), function(){
		Route::get('producto/{id}', ['as'=>'producto', 'uses'=>'HomeController@producto']);
		Route::get('contacto', ['as'=>'contacto', 'uses'=>'HomeController@contacto']);
	});

});
