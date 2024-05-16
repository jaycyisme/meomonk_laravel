<?php


use App\Http\Controllers\AttributeController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;


use App\Http\Controllers\AuthenticationController;

use App\Http\Controllers\BillController;


use App\Http\Controllers\HomeController;

use App\Models\Category;
use Controller\UserControllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\UserController;
use App\Models\Bill;

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

Route::get('/productt', [PagesController::class, 'product'])->name('product');
// Route::get('/products', [PagesController::class, 'products'])->name('products');
// Route::get('/add-new-product', [PagesController::class, 'addNewProducts'])->name('addNewProducts');

// Thêm các route cho Category
Route::get('/category', [CategoryController::class, 'index'])->name('category'); // Hiển thị danh sách các danh mục
Route::get('/add-new-category', [CategoryController::class, 'create'])->name('addNewCategory'); // Hiển thị form thêm mới danh mục
Route::get('/edit-category/{id}', [CategoryController::class, 'edit'])->name('editCategory'); // Hiển thị form chỉnh sửa danh mục
Route::post('/add-new-category', [CategoryController::class, 'store'])->name('storeCategory'); // Xử lý thêm mới danh mục
Route::put('/update-category/{id}', [CategoryController::class, 'update'])->name('updateCategory'); // Xử lý chỉnh sửa danh mục
Route::delete('/category/{id}', [CategoryController::class, 'softDelete'])->name('softDeleteCategory'); // Xử lý xóa danh mục



// Thêm các route cho Attribute
Route::get('/attributes', [AttributeController::class, 'index'])->name('attributes');
Route::get('/add-new-attributes', [AttributeController::class, 'addNewAttributes'])->name('addNewAttributes');
Route::post('/add-new-attributes', [AttributeController::class, 'store'])->name('Attributesstore');
Route::delete('/attributes/{id}', [AttributeController::class, 'delete'])->name('Attributesdelete');
Route::get('/edit-attributes/{id}', [AttributeController::class, 'edit'])->name('Attributesedit'); // Hiển thị form chỉnh sửa danh mục
Route::put('/update-attributes/{id}', [AttributeController::class, 'update'])->name('Attributesupdate');

// Cập nhật danh mục
// Route::get('/add-new-product', [AttributeController::class, 'index1'])->name('addproduct');



// Thêm các route cho product
// Route::get('/products', [PagesController::class, 'products'])->name('products');
Route::get('/add-new-product', [ProductController::class, 'addNewProducts'])->name('addNewProducts');
Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::get('/product/{product}', [ProductController::class, 'show'])->name('product.show');
Route::get('/product/{product}/edit', [ProductController::class, 'edit'])->name('product.edit');
Route::delete('/product/{product}', [ProductController::class, 'softDelete'])->name('product.destroy');
Route::post('/add-new-product', [ProductController::class, 'store'])->name('productstore');







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

Route::post('/coupons', [CouponController::class, 'store'])->name('couponstore');

Route::get('/coupons/{id}/edit', [CouponController::class, 'edit'])->name('edit');

Route::put('/coupons/{id}', [CouponController::class, 'update'])->name('update');

Route::delete('/coupons/{id}', [CouponController::class, 'destroy'])->name('coupon.destroy');



// User

Route::get('/all-users', [UserController::class, 'index'])->name('allUsers');

Route::delete('/all-users/{id}', [UserController::class, 'destroy'])->name('users.destroy');

Route::post('/all-users', [UserController::class, 'store'])->name('store');

Route::get('/all-users/addNewUser', [UserController::class, 'create'])->name('addNewUser');

Route::get('/all-users/{id}/edit', [UserController::class, 'edit'])->name('editUser');

Route::put('/all-users/{id}', [UserController::class, 'update'])->name('updateUser');




//Bill

Route::get('/order-list', [BillController::class, 'index'])->name('orderList');

Route::delete('/order-list/{id}', [BillController::class, 'destroy'])->name('orders.destroy');

Route::get('/orders/{id}/edit',[BillController::class, 'edit'])->name('orders.edit');

Route::put('/orders/{id}', [BillController::class, 'update'])->name('orders.update');







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





