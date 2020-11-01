<?php
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

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

Route::get('/routes', function () {
    return view('welcome');
});


Route::resource('routes/pages', PageController::class);


// retornar una vista directamente, en este caso la vista se llama welcome y en la url
// solo colocamos vista
#Route::view('routes/vista', 'welcome');
// retornando un hola
/*Route::get('routes/prueba', function(){
    return 'hola';
});*/
