<?php


use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
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


Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});


Route::get('/cek-role', function () {
    
    
    if(auth()->user()->hasRole('admin')){
     
        return redirect('/admin');
    }else{
        
        return redirect('/');
    }

    
});

// Route::group(['middleware' => ['verified', 'role:pembaca']], function () {
    
// });

Route::group(['middleware' => ['verified', 'role:admin']], function () {

    Route::resource('admin', AdminController::class);
    Route::get('/admin', [AdminController::class, 'index']);
    Route::post('/admin/store', [AdminController::class, 'store']);
    Route::get('/edit/{id}', [AdminController::class, 'edit']);
    Route::get('/user', [AdminController::class, 'get_user']);
    Route::get('/artikel/list', [AdminController::class, 'artikel_list']);
    Route::get('/upload/artikel', [AdminController::class, 'data_table']);
    Route::delete('/admin/delete/{id}', [AdminController::class, 'destroy']);
});

Route::group(['middleware' => ['verified', 'role:pembaca']], function () {  
    Route::post('/artikel/likes', [PembacaController::class, 'likes']);
});
// Route::group(['middleware' => 'auth'], function () {
  
// });

Route::get('/', function () {
    return view('home');
});



Route::get('/tes', function () {
    return view('admin.tes');
});
Route::get('/konten', [HomeController::class, 'konten']);





