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

/*Route::get('/', function () {
    return view('welcome');
});
*/
// Route::any('contactos', function () {
//      return view('contactos');

// });

// Route::any('/index.php', function () {
//     return view('contacto');
// });

// Route::match(['post','get'],'/index.php', function () {
//     return view('contacto');
// });

/*Route::get('hola-mundo/{nombre?}', function ($nombre="Rodrigo Tejada") { //para pasar un parametro
    return view('hola-mundo',array("nombre" => $nombre));
            })-> where(['nombre' => '[A-Za-z]+'//. 'edad' => '[0-9]+'
]);
*/
/*Route::get('contactos/{nombre?}/{edad?}', function ($nombre = "Rodrigo Tejada", $edad = 45) {
    return view('contactos.contactos')->with('nombre',$nombre)
                                      ->with('edad',$edad)
                                      ->with('frutas',array('limón','tomate','bananas','melón','piña'));
});*/
Route::resource('cliente', 'ClienteController');
