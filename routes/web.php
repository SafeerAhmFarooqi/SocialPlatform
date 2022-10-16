<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\UserAdminController;
use App\Http\Controllers\Admin\ShopAdminController;
use App\Http\Controllers\Admin\GroupAdminController;
use App\Http\Controllers\Admin\VoucherAdminController;
use App\Http\Controllers\Admin\PostAdminController;
use App\Http\Controllers\Admin\CommentAdminController;
use App\Http\Controllers\Admin\AdminCountryController;
use App\Http\Controllers\Shop\VoucherShopController;
use App\Http\Controllers\Shop\ShopProfileController;
use App\Http\Controllers\User\UserProfileController;
use App\Http\Controllers\User\UserPeopleNearbyController;
use App\Http\Controllers\User\UserGroupsController;
use App\Http\Controllers\User\UserListController;
use App\Http\Controllers\User\UserVoucherController;
use App\Http\Controllers\User\UserSavingController;
use App\Models\User;
use App\Http\Controllers\vendor\Chatify\MessagesController;

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

Route::get('/get-name', [DashboardController::class,'getName'])->name('get.name');

Route::get('/dashboard',[DashboardController::class,'dashboard'])->middleware(['auth','verified','admin.dashboard.approved'])->name('dashboard');



Route::name('app.')->group(function () {
    Route::get('/agb',[DashboardController::class,'agb'])->name('agb');
});

Route::name('admin.')->prefix('admin')->middleware(['role:Admin','auth'])->group(function () {
    // Admin User Management Routes
    Route::get('/Users-list', [UserAdminController::class,'allUsersList'])->name('all.users.list');
    Route::get('/Users-list-Show-Active', [UserAdminController::class,'allUsersListShowActive'])->name('all.users.list.show.active');
    Route::get('/Users-list-Show-Deactive', [UserAdminController::class,'allUsersListShowDeactive'])->name('all.users.list.show.deactive');
    Route::post('/Users-list-Delete', [UserAdminController::class,'allUsersListDelete'])->name('all.users.list.delete');
    Route::post('/Users-list-Active', [UserAdminController::class,'allUsersListActive'])->name('all.users.list.active');
    Route::post('/Users-list-Deactive', [UserAdminController::class,'allUsersListDeactive'])->name('all.users.list.deactive');
    // Admin Shop Management Routes
    Route::get('/Shops-list', [ShopAdminController::class,'allShopsList'])->name('all.shops.list');
    Route::get('/Shops-list-Show-Active', [ShopAdminController::class,'allShopsListShowActive'])->name('all.shops.list.show.active');
    Route::get('/Shops-list-Show-Deactive', [ShopAdminController::class,'allShopsListShowDeactive'])->name('all.shops.list.show.deactive');
    Route::post('/Shops-list-Delete', [ShopAdminController::class,'allShopsListDelete'])->name('all.shops.list.delete');
    Route::post('/Shops-list-Active', [ShopAdminController::class,'allShopsListActive'])->name('all.shops.list.active');
    Route::post('/Shops-list-Deactive', [ShopAdminController::class,'allShopsListDeactive'])->name('all.shops.list.deactive');
    Route::get('/Shops-Categories', [ShopAdminController::class,'allShopsCategories'])->name('all.shops.categories');
    Route::get('/Shops-Categories-Edit-Page/{id?}', [ShopAdminController::class,'allShopsCategoriesEditShow'])->name('all.shops.categories.edit.page');
    Route::get('/Shops-Sub-Categories-Edit-Page/{id?}', [ShopAdminController::class,'allShopsSubCategoriesEditShow'])->name('all.shops.subcategories.edit.page');
    Route::post('/Shops-Categories-Edit', [ShopAdminController::class,'allShopsCategoriesEdit'])->name('all.shops.categories.edit');
    Route::post('/Shops-Sub-Categories-Edit', [ShopAdminController::class,'allShopsSubCategoriesEdit'])->name('all.shops.subcategories.edit');
    Route::post('/Shops-Categories-Create', [ShopAdminController::class,'allShopsCategoriesCreate'])->name('all.shops.categories.create');
    Route::post('/Shops-Subcategories-Create', [ShopAdminController::class,'allShopsSubCategoriesCreate'])->name('all.shops.subcategories.create');
    Route::post('/Shops-Categories-Delete', [ShopAdminController::class,'allShopsCategoriesDelete'])->name('all.shops.categories.delete');
    Route::post('/Shops-Sub-Categories-Delete', [ShopAdminController::class,'allShopsSubCategoriesDelete'])->name('all.shops.subcategories.delete');
    // Admin Group Management Routes
    Route::get('/Groups-list', [GroupAdminController::class,'allGroupsList'])->name('all.groups.list');
    Route::get('/Groups-list-Show-Active', [GroupAdminController::class,'allGroupsListShowActive'])->name('all.groups.list.show.active');
    Route::get('/Groups-list-Show-Deactive', [GroupAdminController::class,'allGroupsListShowDeactive'])->name('all.groups.list.show.deactive');
    Route::post('/Groups-list-Delete', [GroupAdminController::class,'allGroupsListDelete'])->name('all.groups.list.delete');
    Route::post('/Groups-list-Active', [GroupAdminController::class,'allGroupsListActive'])->name('all.groups.list.active');
    Route::post('/Groups-list-Deactive', [GroupAdminController::class,'allGroupsListDeactive'])->name('all.groups.list.deactive');
    // Admin Voucher Management Routes
    Route::get('/Vouchers-list', [VoucherAdminController::class,'allVouchersList'])->name('all.vouchers.list');
    Route::get('/Vouchers-list-Show-Active', [VoucherAdminController::class,'allVouchersListShowActive'])->name('all.vouchers.list.show.active');
    Route::get('/Vouchers-list-Show-Deactive', [VoucherAdminController::class,'allVouchersListShowDeactive'])->name('all.vouchers.list.show.deactive');
    Route::post('/Vouchers-list-Delete', [VoucherAdminController::class,'allVouchersListDelete'])->name('all.vouchers.list.delete');
    Route::post('/Vouchers-list-Active', [VoucherAdminController::class,'allVouchersListActive'])->name('all.vouchers.list.active');
    Route::post('/Vouchers-list-Deactive', [VoucherAdminController::class,'allVouchersListDeactive'])->name('all.vouchers.list.deactive');
    // Admin Posts Management Routes
    Route::get('/User-Post-list', [PostAdminController::class,'allUserPostShow'])->name('all.user.posts.show');
    Route::post('/User-Post-list-Delete', [PostAdminController::class,'allUserPostDelete'])->name('all.users.post.delete');
    Route::get('/Group-Post-list', [PostAdminController::class,'allGroupPostShow'])->name('all.group.posts.show');
    Route::post('/Group-Post-list-Delete', [PostAdminController::class,'allGroupPostDelete'])->name('all.groups.post.delete');
    // Admin Comments Management Routes
    Route::get('/Post-Comment-list', [CommentAdminController::class,'allPostsCommentsShow'])->name('all.post.comments.show');
    Route::post('/Post-Comment-list-Delete', [CommentAdminController::class,'allPostsCommentsDelete'])->name('all.post.comments.delete');
    Route::resource('country', AdminCountryController::class);
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
    Route::post('/user-groups-delete', [UserGroupsController::class,'deleteGroup'])->name('user.dashboard.groups.delete');
    Route::post('/user-groups-leave', [UserGroupsController::class,'leaveGroup'])->name('user.dashboard.groups.leave');
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
    Route::get('chat-with/{id}',[MessagesController::class,'index2'])->name('user2');
});
require __DIR__.'/auth.php';
