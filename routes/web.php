<?php

use App\Http\Controllers\AuthenticationController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Models\Category;
use Controller\UserControllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\UserController;



//FRONT_END

Route::get('/index', [HomeController::class, 'index'])->name('index');

Route::get('/about-us', [PagesController::class, 'aboutUs']);

Route::get('/blog-detail', [PagesController::class, 'blogDetail']);

Route::get('/blog-grid', [PagesController::class, 'blogGrid'])->name('blogGrid');

Route::get('/blog-list', [PagesController::class, 'blogList']);

Route::get('/cart', [PagesController::class, 'cart'])->name('cart');

Route::get('/checkout', [PagesController::class, 'checkout'])->name('checkout');

Route::get('/contact-us', [PagesController::class, 'contactUs']);

Route::get('/faq', [PagesController::class, 'faq']);

Route::get('/login', [PagesController::class, 'login'])->name('login');

Route::get('/order-success', [PagesController::class, 'orderSuccess']);

Route::get('/order-user-tracking', [PagesController::class, 'orderUserTracking']);

Route::get('/otp', [PagesController::class, 'otp'])->name('otp');

Route::get('/product-toy', [PagesController::class, 'productToy']);

Route::get('/product-bottom-thumbnail', [PagesController::class, 'productBottomThumbnail']);

Route::get('/product-food', [PagesController::class, 'productFood']);

Route::get('/product-service', [PagesController::class, 'productService']);

Route::get('/product-pharmacy', [PagesController::class, 'productPharmacy']);

Route::get('/search', [PagesController::class, 'search']);

Route::get('/shop-service', [PagesController::class, 'shopService'])->name('shopService');

Route::get('/shop-category-slider', [PagesController::class, 'shopCategorySlider']);

Route::get('/shop-category', [PagesController::class, 'shopCategory'])->name('shopCategory');

Route::get('/sign-up', [PagesController::class, 'signUp'])->name('signUp');

Route::get('/user-dashboard', [PagesController::class, 'userDashboard']);

Route::get('/wish-list', [PagesController::class, 'wishList'])->name('wishList');



//CATEGORY
// Route::get('/display-category', [CategoryController::class, 'displayCategory'])->name('displayCategory');





//BACK_END

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



// Route::get('/otp', [AuthenticationController::class, 'sendEmail']);




//Authentication
// Route::get('/register', [CategoryController::class, 'signUpIndex'])->name('signUp');
Route::post('/add-customer', [AuthenticationController::class, 'signUp'])->name('addUser');

Route::post('/verify-otp', [AuthenticationController::class, 'verifyOtp'])->name('verifyOtp');

Route::post('/login-func', [AuthenticationController::class, 'login'])->name('loginFunction');
