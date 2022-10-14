<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DummyController;
use App\Http\Controllers\BikeController;

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
});

Route::get('ruta1', function () {
 return 'Hello World';
});
Route::get('ruta2', function () {
 return view('welcome');
});
*/

/*Route::delete	('delete',	[DummyController::class, 'delete'	])->name('dummy.delete');
Route::get		('get', 	[DummyController::class, 'get'		])->name('dummy.get');
Route::post		('post',	[DummyController::class, 'post'		])->name('dummy.post');
Route::put		('put', 	[DummyController::class, 'put'		])->name('dummy.put');
Route::any		('any', 	[DummyController::class, 'any'		])->name('dummy.any');*/

Route::get('/', [BikeController::class, 'index'])->name('index');
Route::get('/create', [BikeController::class, 'create'])->name('create');
Route::get('/show/{id}', [BikeController::class, 'show'])->name('show');
Route::get('/edit/{id}', [BikeController::class, 'edit'])->name('edit');
Route::delete	('/delete/{id}',	[BikeController::class, 'delete'	])->name('delete');