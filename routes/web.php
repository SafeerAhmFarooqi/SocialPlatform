<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\UserAdminController;
use App\Http\Controllers\Admin\ShopAdminController;
use App\Http\Controllers\Admin\GroupAdminController;
use App\Http\Controllers\Admin\VoucherAdminController;
use App\Http\Controllers\Admin\PostAdminController;
use App\Http\Controllers\Admin\CommentAdminController;
use App\Http\Controllers\Shop\VoucherShopController;
use App\Http\Controllers\User\UserProfileController;

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
})->name('landing');

Route::get('/check', function () {
    return view('check');
});

Route::get('/dashboard',[DashboardController::class,'dashboard'])->middleware(['auth','verified','admin.dashboard.approved'])->name('dashboard');

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
    Route::get('/Admin-Shops-Categories', [ShopAdminController::class,'allShopsCategories'])->name('admin.all.shops.categories');
    Route::get('/Admin-Shops-Categories-Edit-Page/{id?}', [ShopAdminController::class,'allShopsCategoriesEditShow'])->name('admin.all.shops.categories.edit.page');
    Route::get('/Admin-Shops-Sub-Categories-Edit-Page/{id?}', [ShopAdminController::class,'allShopsSubCategoriesEditShow'])->name('admin.all.shops.subcategories.edit.page');
    Route::post('/Admin-Shops-Categories-Edit', [ShopAdminController::class,'allShopsCategoriesEdit'])->name('admin.all.shops.categories.edit');
    Route::post('/Admin-Shops-Sub-Categories-Edit', [ShopAdminController::class,'allShopsSubCategoriesEdit'])->name('admin.all.shops.subcategories.edit');
    Route::post('/Admin-Shops-Categories-Create', [ShopAdminController::class,'allShopsCategoriesCreate'])->name('admin.all.shops.categories.create');
    Route::post('/Admin-Shops-Subcategories-Create', [ShopAdminController::class,'allShopsSubCategoriesCreate'])->name('admin.all.shops.subcategories.create');
    Route::post('/Admin-Shops-Categories-Delete', [ShopAdminController::class,'allShopsCategoriesDelete'])->name('admin.all.shops.categories.delete');
    Route::post('/Admin-Shops-Sub-Categories-Delete', [ShopAdminController::class,'allShopsSubCategoriesDelete'])->name('admin.all.shops.subcategories.delete');
    // Admin Group Management Routes
    Route::get('/Admin-Groups-list', [GroupAdminController::class,'allGroupsList'])->name('admin.all.groups.list');
    Route::get('/Admin-Groups-list-Show-Active', [GroupAdminController::class,'allGroupsListShowActive'])->name('admin.all.groups.list.show.active');
    Route::get('/Admin-Groups-list-Show-Deactive', [GroupAdminController::class,'allGroupsListShowDeactive'])->name('admin.all.groups.list.show.deactive');
    Route::post('/Admin-Groups-list-Delete', [GroupAdminController::class,'allGroupsListDelete'])->name('admin.all.groups.list.delete');
    Route::post('/Admin-Groups-list-Active', [GroupAdminController::class,'allGroupsListActive'])->name('admin.all.groups.list.active');
    Route::post('/Admin-Groups-list-Deactive', [GroupAdminController::class,'allGroupsListDeactive'])->name('admin.all.groups.list.deactive');
    // Admin Voucher Management Routes
    Route::get('/Admin-Vouchers-list', [VoucherAdminController::class,'allVouchersList'])->name('admin.all.vouchers.list');
    Route::get('/Admin-Vouchers-list-Show-Active', [VoucherAdminController::class,'allVouchersListShowActive'])->name('admin.all.vouchers.list.show.active');
    Route::get('/Admin-Vouchers-list-Show-Deactive', [VoucherAdminController::class,'allVouchersListShowDeactive'])->name('admin.all.vouchers.list.show.deactive');
    Route::post('/Admin-Vouchers-list-Delete', [VoucherAdminController::class,'allVouchersListDelete'])->name('admin.all.vouchers.list.delete');
    Route::post('/Admin-Vouchers-list-Active', [VoucherAdminController::class,'allVouchersListActive'])->name('admin.all.vouchers.list.active');
    Route::post('/Admin-Vouchers-list-Deactive', [VoucherAdminController::class,'allVouchersListDeactive'])->name('admin.all.vouchers.list.deactive');
    // Admin Posts Management Routes
    Route::get('/Admin-User-Post-list', [PostAdminController::class,'allUserPostShow'])->name('admin.all.user.posts.show');
    Route::post('/Admin-User-Post-list-Delete', [PostAdminController::class,'allUserPostDelete'])->name('admin.all.users.post.delete');
    Route::get('/Admin-Group-Post-list', [PostAdminController::class,'allGroupPostShow'])->name('admin.all.group.posts.show');
    Route::post('/Admin-Group-Post-list-Delete', [PostAdminController::class,'allGroupPostDelete'])->name('admin.all.groups.post.delete');
    // Admin Comments Management Routes
    Route::get('/Admin-Post-Comment-list', [CommentAdminController::class,'allPostsCommentsShow'])->name('admin.all.post.comments.show');
    Route::post('/Admin-Post-Comment-list-Delete', [CommentAdminController::class,'allPostsCommentsDelete'])->name('admin.all.post.comments.delete');
});

Route::group(['middleware' => ['role:Shop','auth']], function () {
// Shop Voucher Management Routes
Route::get('/Shop-Vouchers-Show', [VoucherShopController::class,'myVouchersShow'])->name('shop.myvouchers.show');
Route::post('/Shop-Voucher-Create', [VoucherShopController::class,'shopVoucherStore'])->name('shop.voucher.create');
Route::post('/Shop-Voucher-Delete', [VoucherShopController::class,'shopVoucherDelete'])->name('shop.voucher.delete');
Route::get('/Shop-Use-Voucher-Show', [VoucherShopController::class,'useVoucherShow'])->name('shop.usevoucher.show');
Route::post('/Shop-Use-Voucher-Submit', [VoucherShopController::class,'useVoucherSubmit'])->name('shop.usevoucher.submit');
Route::get('/Shop-Use-Voucher-List-Show', [VoucherShopController::class,'useVoucherListShow'])->name('shop.usevoucher.list.show');
});

Route::group(['middleware' => ['role:User','auth','verified','admin.user.approved']], function () {
    Route::get('/user-profile-page', [UserProfileController::class,'userProfilePageShow'])->name('user.profile.basic.show');
    Route::post('/user-profile-image-store', [UserProfileController::class,'userProfileImageStore'])->name('user.profile.image.change');
});
require __DIR__.'/auth.php';
