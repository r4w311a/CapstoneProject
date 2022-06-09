<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\AdminSettingsController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\ProductController;

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

Route::middleware([
    'auth:sanctum,web',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


// User Routes
Route::get('/', [indexController::class, 'index']);

// Admin login Routes
Route::group(['prefix' => 'admin', 'middleware' => ['admin:admin']], function () {
    Route::get('/login', [AdminController::class, 'loginForm']);
    Route::post('/login', [AdminController::class, 'store'])->name('admin.login');
});
Route::middleware(['auth:sanctum,admin', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.index');
    })->name('admin.dashboard');
});
////////////////////////

Route::get('/admin/logout', [AdminController::class, 'destroy'])->name('admin.logout');
Route::get('/admin/settings', [AdminSettingsController::class, 'AdminSettings'])->name('admin.settings');


Route::get('/admin/products', [indexController::class, 'products']);

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
    Route::get('/', [ProductController::class, 'view_subcategories'])->name('view-subcategories');
    Route::post('add', [ProductController::class, 'add_Product'])->name('add-Product');
    Route::get('edit/{id}', [ProductController::class, 'edit_Product'])->name('edit-Product');
    Route::post('update/{id}', [ProductController::class, 'update_Product'])->name('update-Product');
    Route::get('delete/{id}', [ProductController::class, 'delete_Product'])->name('delete-Product');
    Route::get('estore/{id}', [ProductController::class, 'restore_Product'])->name('restore-Product');
    Route::get('p-delete/{id}', [ProductController::class, 'p_delete_Product'])->name('p-delete-Product');
});