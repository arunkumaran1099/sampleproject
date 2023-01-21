<?php

use App\Http\Controllers\newcontroller;
use App\Http\Controllers\newinvokable;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Middleware\EnsureTokenIsValid;


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

// Route::get('/', function () {
//     return 'hello';
// });

// Route::match (['get', 'post'], '/', function () {
//     return view('home');

// });

// Route::get('/', function (request $request) {
//     $name = $request->input('name');
//     $pas= $request->input('password');

//     dd($name);

// });

// Route::get('/', function () {
//      return 'hello';
// });


// ---------------------------------------------------------------------------
// Route::redirect('/', 'home');

// Route::get('home', function () {
//     return view('home');
// });
// ----------------------------------------------------------------------------

// Route::view('/', 'home');

// Route::get('/user/{id}', function (Request $request, $id) {
//     return 'user' . $id;
// });

// Route::get('/user/{name?}', function ($name = 'john') {
//      return 'user ' . $name;
//     //  --return user john
// });

// Route::get('/user/{name}', function ($name) {
//     return $name;
// })->where('name', '[A-Za-z]+');

// Route::get('/user/{id}', function ($id) {
//     return $id;
// })->where('id', '[0-9]+');

// Route::get('/user/{id}/{name}', function ($id, $name) {
//     return $id . $name;
// })->where(['id' => '[0-9]+', 'name' => '[a-z]+']);

// ----------------------------------------------------
// Route::get('/user/{id}', function ($id) {
//     return $id;
// });

// // App\Providers\RouteServiceProvider changes in this Directory

// // ------------------------------------------------------
// // encoded forward slash do not / in it
// Route::get('/search/{search}', function ($search) {
//     return $search;
// })->where('search', '.*');
// ----------------------------------------------------------
//to redirect named route
// Route::view('/home', 'home');
// Route::post('/insert',[newcontroller::class, 'view']);
// Route::get('/',[newcontroller::class,'show'])->name('routename');

// ----------------------------------------------------------------------
//to redirect named route and contoller but having doubt

// Route::view('/home', 'home');
// Route::post('/insert',[newcontroller::class, 'view']);
// Route::get('/name/{name?}/password/{password?}',[newcontroller::class,'show'])->name('routename');

//---two method tried but not working

// Route::get('/name/{name?}/password/{password?}', function (request $name) {
//     return $name->$name ;
// })->name('routename')->where(['name' => '[a-z]+']);
//-------------------------------------------------------------------------
// Route::view('/','home')->name('namedroute');
// Route::post('/insert',[newcontroller::class,'list'])->middleware('Tokenkvalid');
//-------------------------------------------------------------------------
// Route::get('month/{num}', function ($num) {
//     if($num==1){
//         return 'january';
//     }elseif($num==2){
//         return 'february';
//     } elseif ($num == 2) {
//         return 'march';
//     }

// })->middleware('Tokenkvalid');
//-----------------------------------------------------------------------------------
// //middleware to check admin are not
// Route::view('/','home')->name('namedroute');  //show home page
// Route::post('/insert', [newcontroller::class, 'list'])->middleware('Tokenkvalid'); //insert action done and
// // check admin are not in middleware
// Route::view('dashboard', 'dashboard'); //show dashboard page
//------------------------------------------------------------------------------------
//to check middleware rotes with fully classified middleware name ->middleware(EnsureTokenIsValid::class)
//to use this method include use App\Http\Middleware\EnsureTokenIsValid; in top
// Route::view('/','home')->name('namedroute');  //show home page
// Route::post('/insert', [newcontroller::class, 'list'])->middleware(EnsureTokenIsValid::class); //insert action done and
// // check admin are not in middleware
// Route::view('dashboard', 'dashboard'); //show dashboard page
//---------------------------------------------------------------------------------------------
//invokable contrller using
Route::get('/', newinvokable::class);

