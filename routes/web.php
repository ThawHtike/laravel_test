<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});
*/
/*
Route::get('/', function () {
    return "Welcome to Thaw Zin Htike's Interview";
});

Route::get('/post', function () {
    return "Welcome to Thaw Zin Htike's First Post";
});

Route::get('/post/{id}', function ($id) {
    return "Welcome to Thaw Zin Htike's First Post id is ".$id;
});


Route::get('/post/{id}/{posttitle}', function ($id,$posttitle) {
    return "Welcome to Thaw Zin Htike's First Post id is ".$id." ".$posttitle;
});
*/






Route::resource("/products", App\Http\Controllers\ProductController::class);

Route::resource("/customers", App\Http\Controllers\CustomerController::class);
// Route::get('/articles/detail/{id}', function ( $id ) {
// return "Article Detail - $id";
// });
// Route::get('/articles/more', function() {
// return redirect('/articles/detail');
// });
// Route::get('/articles/detail', function () {
// return 'Article Detail';
// })->name('article.detail');





Route::get('/create', [App\Http\Controllers\RegisterController::class, 'create']);

Route::post('/register', [App\Http\Controllers\RegisterController::class, 'store'])->name('register');


Route::get('/', [App\Http\Controllers\LoginController::class, 'index']);

Route::post('/check', [App\Http\Controllers\LoginController::class, 'check'])->name('check');
