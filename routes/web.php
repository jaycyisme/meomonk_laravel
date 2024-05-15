<?php
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\CategoryController;
use App\Models\Category;
use Controller\UserControllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\UserController;



Route::get('/index', [PagesController::class, 'index']);

Route::get('/dashboard', [PagesController::class, 'dashboard'])->name('dashboard');

Route::get('/products', [PagesController::class, 'products'])->name('products');
Route::get('/add-new-product', [PagesController::class, 'addNewProducts'])->name('addNewProducts');

// Thêm các route cho Category
Route::get('/category', [CategoryController::class, 'index'])->name('category'); // Hiển thị danh sách các danh mục
Route::get('/add-new-category', [CategoryController::class, 'create'])->name('addNewCategory'); // Hiển thị form thêm mới danh mục
Route::get('/edit-category/{id}', [CategoryController::class, 'edit'])->name('editCategory'); // Hiển thị form chỉnh sửa danh mục
Route::post('/add-new-category', [CategoryController::class, 'store'])->name('storeCategory'); // Xử lý thêm mới danh mục
Route::put('/update-category/{id}', [CategoryController::class, 'update'])->name('updateCategory'); // Xử lý chỉnh sửa danh mục
Route::delete('/category/{id}', [CategoryController::class, 'softDelete'])->name('softDeleteCategory'); // Xử lý xóa danh mục

// Thêm các route cho Attribute
Route::get('/attributes', [PagesController::class, 'attributes'])->name('attributes');
Route::get('/add-new-attributes', [PagesController::class, 'addNewAttributes'])->name('addNewAttributes');


Route::get('/all-users', [PagesController::class, 'allUsers'])->name('allUsers');
Route::get('/add-new-user', [PagesController::class, 'addNewUser'])->name('addNewUser');

Route::get('/role', [PagesController::class, 'role'])->name('role');
Route::get('/create-role', [PagesController::class, 'addNewRole'])->name('addNewRole');

Route::get('/media', [PagesController::class, 'media'])->name('media');

Route::get('/order-list', [PagesController::class, 'orderList'])->name('orderList');
Route::get('/order-detail', [PagesController::class, 'orderDetail'])->name('orderDetail');
Route::get('/order-tracking', [PagesController::class, 'orderTracking'])->name('orderTracking');

Route::get('/currency-rates', [PagesController::class, 'currencyRates'])->name('currencyRates');

// Route::get('/coupon-list', [PagesController::class, 'couponList'])->name('couponList');
Route::get('/create-coupon', [PagesController::class, 'addNewCoupon'])->name('addNewCoupon');

Route::get('/product-review', [PagesController::class, 'productReview'])->name('productReview');

Route::get('/support-ticket', [PagesController::class, 'supportTicket'])->name('supportTicket');

Route::get('/profile-setting', [PagesController::class, 'profileSetting'])->name('profileSetting');

Route::get('/reports', [PagesController::class, 'reportList'])->name('reportList');



//Coupon
// Route::get('/coupon', [PagesController::class, 'index'])->name('couponList');
Route::get('/coupon-list', [CouponController::class, 'index'])->name('couponList');

Route::get('/coupons/create', [CouponController::class, 'create'])->name('create');

Route::post('/coupons', [CouponController::class, 'store'])->name('store');

Route::get('/coupons/{id}/edit', [CouponController::class, 'edit'])->name('edit');

Route::put('/coupons/{id}', [CouponController::class, 'update'])->name('update');

Route::delete('/coupons/{id}', [CouponController::class, 'destroy'])->name('coupon.destroy');



// User

Route::get('/all-users', [UserController::class, 'index'])->name('allUsers');

Route::delete('/all-users/{id}', [UserController::class, 'destroy'])->name('users.destroy');

Route::post('/all-users', [UserController::class, 'store'])->name('store');

Route::get('/all-users/addNewUser', [UserController::class, 'create'])->name('addNewUser');






// Auth::routes();
// Route::resource('category', CategoryController::class);

//Category
// Route::prefix('')->group(function(){
//     Route::get('/category', [CategoryController::class, 'index']);
// });
