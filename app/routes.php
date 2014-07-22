<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('home',array('as' => 'inicio',  function()
{
	return View::make('home.index');


}));


Route::get('empresa',array('as' => 'empresa', function()
{
return View::make('empresa.index');
	
}));


Route::get('servicios',array('as' => 'servicio', function()
{
return View::make('servicios.index');
	
}));


Route::get('coverturageografica',array('as' => 'covergeografica', function()
{
return View::make('covergeo.index');
	
}));


Route::get('sucursales',array('as' => 'sucursal', function()
{
return View::make('sucursales.index');
}));


Route::get('correo',array('as' => 'contacto', function()
{
return View::make('contacto.index');
	

}));