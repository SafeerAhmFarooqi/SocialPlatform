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
use App\Http\Controllers\Shop\ShopProfileController;
use App\Http\Controllers\User\UserProfileController;
use App\Http\Controllers\User\UserPeopleNearbyController;
use App\Http\Controllers\User\UserGroupsController;
use App\Http\Controllers\User\UserListController;
use App\Http\Controllers\User\UserVoucherController;
use App\Http\Controllers\User\UserSavingController;

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
    return view('dashboards.app.landing');
})->name('landing');

Route::get('/dashboard',[DashboardController::class,'dashboard'])->middleware(['auth','verified','admin.dashboard.approved'])->name('dashboard');



Route::name('app.')->group(function () {
    Route::get('/agb',[DashboardController::class,'agb'])->name('agb');
});

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

Route::name('shop.')->prefix('shop')->middleware(['role:Shop','auth'])->group(function () {
// Shop Voucher Management Routes
Route::get('/Vouchers-Show', [VoucherShopController::class,'myVouchersShow'])->name('myvouchers.show');
Route::post('/Voucher-Create', [VoucherShopController::class,'shopVoucherStore'])->name('voucher.create');
Route::post('/Voucher-Delete', [VoucherShopController::class,'shopVoucherDelete'])->name('voucher.delete');
Route::get('/Use-Voucher-Show', [VoucherShopController::class,'useVoucherShow'])->name('usevoucher.show');
Route::post('/Use-Voucher-Submit', [VoucherShopController::class,'useVoucherSubmit'])->name('usevoucher.submit');
Route::get('/Use-Voucher-List-Show', [VoucherShopController::class,'useVoucherListShow'])->name('usevoucher.list.show');
Route::resource('profile', ShopProfileController::class);
});

Route::group(['middleware' => ['role:User','auth','verified','admin.user.approved']], function () {
    Route::get('/user-profile-page', [UserProfileController::class,'userProfilePageShow'])->name('user.profile.basic.show');
    Route::post('/user-profile-image-store', [UserProfileController::class,'userProfileImageStore'])->name('user.profile.image.change');
    Route::post('/user-profile-data-store', [UserProfileController::class,'userProfileDataStore'])->name('user.profile.data.change');
    Route::get('/user-people-nearby', [UserPeopleNearbyController::class,'userPeopleNearbyPageShow'])->name('user.dashboard.people-nearby');
    Route::get('/user-groups-dashboard', [UserGroupsController::class,'userGroupsPageShow'])->name('user.dashboard.groups');
    Route::post('/user-groups-store', [UserGroupsController::class,'userGroupsStore'])->name('user.dashboard.groups.store');
    Route::post('/user-groups-member-store', [UserGroupsController::class,'userGroupsMemberStore'])->name('user.dashboard.groups.member.store');
    Route::get('/user-groups-posts/{id?}', [UserGroupsController::class,'userGroupPostPageShow'])->name('user.dashboard.groups.post');
    Route::get('/user-profile-setting-page', [UserProfileController::class,'userProfileSettingPageShow'])->name('user.profile.setting.show');
    Route::post('/user-profile-setting-store', [UserProfileController::class,'userProfileSettingStore'])->name('user.profile.setting.change');
    Route::get('/user-profile-password-page', [UserProfileController::class,'userProfilePasswordPageShow'])->name('user.profile.password.show');
    Route::get('/user-profile-password-change', [UserProfileController::class,'userProfilePasswordChange'])->name('user.profile.password.change');
    Route::get('/support-page', [UserProfileController::class,'supportPage'])->name('user.support.page');
    Route::get('/user-list-page', [UserListController::class,'userListPageShow'])->name('user.dashboard.users.page');
    Route::get('/user-info-page/{id?}', [UserListController::class,'userInfoPageShow'])->name('user.dashboard.user.information');
    Route::get('/user-voucher-page', [UserVoucherController::class,'userVoucherPageShow'])->name('user.dashboard.voucher.page');
    Route::get('/user-saving-page', [UserSavingController::class,'userSavingPageShow'])->name('user.dashboard.saving.page');
});
require __DIR__.'/auth.php';
