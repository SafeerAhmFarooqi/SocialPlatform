<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\UserAdminController;

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

Route::get('/', function () {
    return view('landing');
});

Route::get('/check', function () {
    return view('landing');
});

Route::get('/dashboard',[DashboardController::class,'dashboard'])->middleware(['auth'])->name('dashboard');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');


Route::group(['middleware' => ['role:Admin','auth']], function () {
    Route::get('/Admin-Users-list', [UserAdminController::class,'allUsersList'])->name('admin.all.users.list');
    Route::get('/Admin-Users-list-Show-Active', [UserAdminController::class,'allUsersListShowActive'])->name('admin.all.users.list.show.active');
    Route::get('/Admin-Users-list-Show-Deactive', [UserAdminController::class,'allUsersListShowDeactive'])->name('admin.all.users.list.show.deactive');
    Route::post('/Admin-Users-list-Delete', [UserAdminController::class,'allUsersListDelete'])->name('admin.all.users.list.delete');
    Route::post('/Admin-Users-list-Active', [UserAdminController::class,'allUsersListActive'])->name('admin.all.users.list.active');
    Route::post('/Admin-Users-list-Deactive', [UserAdminController::class,'allUsersListDeactive'])->name('admin.all.users.list.deactive');
});

Route::group(['middleware' => ['role:Shop','auth']], function () {

});

Route::group(['middleware' => ['role:User','auth']], function () {

});
require __DIR__.'/auth.php';
