<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'PagesController@inicio')->name('inicio'); //el controlador mas la funcion que quiero mostrar

Route::get('detalle/{id}', 'PagesController@detalle')->name('notas.detalle');

Route::post('notas', 'PagesController@crear')->name('notas.crear'); // no interfiere con el get

Route::get('editar/{id}', 'PagesController@editar')->name('notas.editar');

Route::put('editar/{id}', 'PagesController@update')->name('notas.update');

Route::delete('eliminar/{id}', 'PagesController@eliminar')->name('notas.eliminar');

/*Route::post('notas', function (Request $request) {
    return $request->all();
})->name('notas'); // habia algo que no andaba
*/

Route::get('fotos', 'PagesController@fotos')->name('foto');
Route::get('blog', 'PagesController@blog')->name('noticias');
Route::get('nosotros/{nombre?}', 'PagesController@nosotros')->name('nosotros');

/*Route::get('/', function () {
    //return view('welcome');
    return view('master');//cambio a otra pagina de inicio
    // lo cambio por un controlador
});

Route::get('fotos/{numero?}', function ($numero = 'sin numero :(') {  // el ? es para que sea opcional el parametro
    return 'estas en '.$numero; //variable para la barra de direccion
})->where('numero', '[0-9]+'); //validar que se ponga un numero 

Route::view('galeria','fotos', [ 'numero' => 125]); // pasar una variable para la vista


Route::get('fotos', function () {
    return view('fotos');
})->name('foto'); //no es necesario que sea el mismo nombre que el link foto es para href, fotos para la barra de direcciones
// entonces si quiero cambiar la / lo cambio del get sin tocar los href
Route::get('blog', function () {
    return view('blog');
})->name('noticias');

Route::get('nosotros/{nombre?}', function ($nombre = null) {
//no es lo recomendable usar logica aca. Mejor usar controladores.
    $equipo = ['santi', 'china', 'jp']; //defino un array

    //return view('nosotros', ['equipo'=> $equipo]); //array asociativo
    return view('nosotros', compact('equipo', 'nombre')); //lo miso pero mejor, no repito nombres
})->name('nosotros');

*/