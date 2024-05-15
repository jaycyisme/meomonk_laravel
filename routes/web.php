<?php

use App\Http\Controllers\AttributeController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Models\Category;
use Controller\UserControllers;
use Illuminate\Support\Facades\Route;

Route::get('/index', [PagesController::class, 'index']);

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

Route::get('/coupon-list', [PagesController::class, 'couponList'])->name('couponList');
Route::get('/create-coupon', [PagesController::class, 'addNewCoupon'])->name('addNewCoupon');

Route::get('/product-review', [PagesController::class, 'productReview'])->name('productReview');

Route::get('/support-ticket', [PagesController::class, 'supportTicket'])->name('supportTicket');

Route::get('/profile-setting', [PagesController::class, 'profileSetting'])->name('profileSetting');

Route::get('/reports', [PagesController::class, 'reportList'])->name('reportList');

// Auth::routes();
// Route::resource('category', CategoryController::class);

//Category
// Route::prefix('')->group(function(){
//     Route::get('/category', [CategoryController::class, 'index']);
// });
