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
/*
Route::get('/', function () {
    return view('welcome');
});*/
//  webmaster.com= route:: get('/',funtion)
// webmaster.com/contacto= route:: get('contacto',funtion)


/* 
Route::get('contacto',function(){

    return "seccion de contactos ";
    
    })->name('contactos');

Route::get('/',function(){

  echo"<a href='". route ('contactos')."'>contacto1</a> <br>";
  echo"<a href='". route ('contactos')."'>contacto1</a> <br>";
  echo"<a href='". route ('contactos')."'>contacto1</a> <br>";
  echo"<a href='". route ('contactos')."'>contacto1</a> <br>";
   
 
 //---------------------------------------------------------------------------------           
}); */
/* Route::get('/',function(){
        $nombre="Manuelito georgino ";
return  view('home')->with('nombre',$nombre);
})->name('home'); */
//-----------------------------------------------------------------------

//Route::view('/','home',['nombre'=>'walter']);


Route::view('/','home',['nombre'=>'Madrigales'])->name('home');

//Route::view('/nosotros','nosotros')->name('nosotros');
Route::view('/ellos','ellos')->name('ellos');
Route::view('/contacto','contacto')->name('contacto');
Route::get('/nosotros','Nosotroscontroler2@index')->name('nosotros');
//route::resource('/nosotros','Nosotroscontroler')->only(['index','show']);
Route::post('/contacto','ContacController@store')->name('contact');
