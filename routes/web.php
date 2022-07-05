<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\AdminSettingsController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\IndexController as AdminIndexController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\LogoutController;

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

// Main routes

Route::group(['prefix' => 'user', 'middleware' => ['user:auth']], function () {
    
    // Require Login

});


Route::middleware(['auth:sanctum,web', config('jetstream.auth_session'), 'verified'])->group(function () {
   

    Route::get('/dashboard', [indexController::class, 'dashboard'])->name('dashboard');
    Route::get('/dashboard/order_details/{order_id}', [indexController::class, 'OrderDetails']);
    Route::get('/logout', [LogoutController::class, 'perform'])->name('logout');

    Route::prefix('/checkout')->group(function () {
       
        Route::get('/', [CartController::class, 'checkout'])->name('cart.checkout');
        Route::post('store/', [CartController::class, 'store_checkout'])->name('store.checkout');
        Route::post('cash/', [CheckoutController::class, 'checkout'])->name('order.checkout');
    });
});

// User Routes
Route::get('/', [indexController::class, 'index']);
Route::get('/cart', [CartController::class, 'index']);
Route::get('/search', [indexController::class, 'search']);

Route::post('/addtocart', [CartController::class, 'AddToCart'])->name('cart.store');
Route::post('/removeFromCart', [CartController::class, 'removeFromCart'])->name('cart.remove');
Route::post('/updateQty', [CartController::class, 'updateQty'])->name('cart.updateQty');


Route::get('/category/{id}/{product_slug}', [indexController::class, 'productDetails']);
Route::get('/product/details/{id}/{product_slug}', [indexController::class, 'productDetails']);
Route::get('/category/{id}', [indexController::class, 'viewSubcategory']);




// Admin login Routes
Route::group(['prefix' => 'admin', 'middleware' => ['admin:admin']], function () {
    Route::get('/', [AdminController::class, 'loginForm']);
    Route::get('/login', [AdminController::class, 'loginForm']);
    Route::post('/login', [AdminController::class, 'store'])->name('admin.login');
});

Route::middleware(['auth:sanctum,admin', config('jetstream.auth_session'), 'verified'])->group(function () {
  

    Route::get('/admin/dashboard', [AdminIndexController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/logout', [LogoutController::class, 'destroy'])->name('admin.logout');

    Route::get('/admin/settings', [AdminSettingsController::class, 'AdminSettings'])->name('admin.settings');
    Route::get('/admin/changepassword', [AdminSettingsController::class, 'changePassword'])->name('admin.change.password');



    // Admin Categories Routes

    Route::prefix('admin/categories/')->group(function () {
        Route::get('/', [CategoryController::class, 'view_categories'])->name('view-categories');
        Route::post('add', [CategoryController::class, 'add_category'])->name('add-category');
        Route::get('edit/{id}', [CategoryController::class, 'edit_category'])->name('edit-category');
        Route::post('update/{id}', [CategoryController::class, 'update_category'])->name('update-category');
        Route::get('delete/{id}', [CategoryController::class, 'delete_category'])->name('delete-category');
        Route::get('estore/{id}', [CategoryController::class, 'restore_category'])->name('restore-category');
        Route::get('p-delete/{id}', [CategoryController::class, 'p_delete_category'])->name('p-delete-category');
    });



    // Admin Sub Categories Routes
    Route::prefix('admin/subcategories/')->group(function () {
        Route::get('/', [SubCategoryController::class, 'view_subcategories'])->name('view-subcategories');
        Route::post('add', [SubCategoryController::class, 'add_subcategory'])->name('add-subcategory');
        Route::get('edit/{id}', [SubCategoryController::class, 'edit_subcategory'])->name('edit-subcategory');
        Route::post('update/{id}', [SubCategoryController::class, 'update_subcategory'])->name('update-subcategory');
        Route::get('delete/{id}', [SubCategoryController::class, 'delete_subcategory'])->name('delete-subcategory');
        Route::get('estore/{id}', [SubCategoryController::class, 'restore_subcategory'])->name('restore-subcategory');
        Route::get('p-delete/{id}', [SubCategoryController::class, 'p_delete_subcategory'])->name('p-delete-subcategory');
    });


    // Admin products Routes
    Route::prefix('admin/products/')->group(function () {
        Route::get('/', [ProductController::class, 'view_products'])->name('view-products');
        Route::get('add', [ProductController::class, 'add_product'])->name('add-product');
        Route::post('store', [ProductController::class, 'store_product'])->name('store-product');
        Route::get('edit/{id}', [ProductController::class, 'edit_product'])->name('edit-product');
        Route::post('update/{id}', [ProductController::class, 'update_product'])->name('update-product');
        Route::get('delete/{id}', [ProductController::class, 'delete_product'])->name('delete-product');
        Route::get('restore/{id}', [ProductController::class, 'restore_product'])->name('restore-product');
        Route::get('p-delete/{id}', [ProductController::class, 'p_delete_product'])->name('p-delete-product');
        Route::get('/ajax/{category_id}', [ProductController::class, 'getSubCategories']);
    });


    

    // Admin Orders Routes
    Route::prefix('admin/orders/')->group(function () {
        Route::get('/', [OrderController::class, 'view_orders'])->name('view-orders');
        Route::get('{order_id}', [OrderController::class, 'PendingDetails'])->name('pending.details');
        Route::get('shipped/{order_id}', [OrderController::class, 'shipped'])->name('shipped');
        Route::get('delivered/{order_id}', [OrderController::class, 'delivered'])->name('delivered');
        Route::get('completed/{order_id}', [OrderController::class, 'completed'])->name('completed');
        Route::get('cancelled/{order_id}', [OrderController::class, 'cancelled'])->name('cancelled');
        
    });

    
    // Admin users Routes
    Route::prefix('admin/users/')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('view-users');
        Route::get('/{id}', [UserController::class, 'user_orders'])->name('user_orders');
       
        
    });

});


////////////////////////
