<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\UserAdminController;
use App\Http\Controllers\Admin\ShopAdminController;
use App\Http\Controllers\Admin\GroupAdminController;

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
    // Admin User Management Routes
    Route::get('/Admin-Users-list', [UserAdminController::class,'allUsersList'])->name('admin.all.users.list');
    Route::get('/Admin-Users-list-Show-Active', [UserAdminController::class,'allUsersListShowActive'])->name('admin.all.users.list.show.active');
    Route::get('/Admin-Users-list-Show-Deactive', [UserAdminController::class,'allUsersListShowDeactive'])->name('admin.all.users.list.show.deactive');
    Route::post('/Admin-Users-list-Delete', [UserAdminController::class,'allUsersListDelete'])->name('admin.all.users.list.delete');
    Route::post('/Admin-Users-list-Active', [UserAdminController::class,'allUsersListActive'])->name('admin.all.users.list.active');
    Route::post('/Admin-Users-list-Deactive', [UserAdminController::class,'allUsersListDeactive'])->name('admin.all.users.list.deactive');
    // Admin Shop Management Routes
    Route::get('/Admin-Shops-list', [ShopAdminController::class,'allShopsList'])->name('admin.all.shops.list');
    Route::get('/Admin-Shops-list-Show-Active', [ShopAdminController::class,'allShopsListShowActive'])->name('admin.all.shops.list.show.active');
    Route::get('/Admin-Shops-list-Show-Deactive', [ShopAdminController::class,'allShopsListShowDeactive'])->name('admin.all.shops.list.show.deactive');
    Route::post('/Admin-Shops-list-Delete', [ShopAdminController::class,'allShopsListDelete'])->name('admin.all.shops.list.delete');
    Route::post('/Admin-Shops-list-Active', [ShopAdminController::class,'allShopsListActive'])->name('admin.all.shops.list.active');
    Route::post('/Admin-Shops-list-Deactive', [ShopAdminController::class,'allShopsListDeactive'])->name('admin.all.shops.list.deactive');
     // Admin Group Management Routes
     Route::get('/Admin-Groups-list', [GroupAdminController::class,'allGroupsList'])->name('admin.all.groups.list');
     Route::get('/Admin-Groups-list-Show-Active', [GroupAdminController::class,'allGroupsListShowActive'])->name('admin.all.groups.list.show.active');
     Route::get('/Admin-Groups-list-Show-Deactive', [GroupAdminController::class,'allGroupsListShowDeactive'])->name('admin.all.groups.list.show.deactive');
     Route::post('/Admin-Groups-list-Delete', [GroupAdminController::class,'allGroupsListDelete'])->name('admin.all.groups.list.delete');
     Route::post('/Admin-Groups-list-Active', [GroupAdminController::class,'allGroupsListActive'])->name('admin.all.groups.list.active');
     Route::post('/Admin-Groups-list-Deactive', [GroupAdminController::class,'allGroupsListDeactive'])->name('admin.all.groups.list.deactive');
});

Route::group(['middleware' => ['role:Shop','auth']], function () {

});

Route::group(['middleware' => ['role:User','auth']], function () {

});
require __DIR__.'/auth.php';
