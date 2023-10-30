<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\FrontpageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['prefix' => 'admin'], function () {
    Route::group(['middleware' => 'admin.guest'], function () {
        Route::get('/', [LoginController::class, 'index'])->name('admin');
        Route::post('/', [LoginController::class, 'checkLogin'])->name('admin.checkLogin');
    });

    Route::group(['middleware' => 'admin.auth'], function () {
        Route::get('/dashboard',
            [DashboardController::class, 'index']
        )->name('admin.dashboard');
        Route::get('/logout', [DashboardController::class, 'logout'])->name('admin.logout');

        Route::get('settings/{slug}', [AdminController::class, 'Settings'])->name('admin.Settings');
        Route::post('settings/save/{slug}', [AdminController::class, 'SaveSettings'])->name('admin.SaveSettings');

        Route::get('/profile', [AdminController::class, 'Profile'])->name('admin.Profile');
        Route::post('/saveprofile', [AdminController::class, 'SaveProfile'])->name('admin.SaveProfile');

        
        Route::get('category', [CategoryController::class, 'index'])->name('admin.Category');
        Route::get('add-category', [CategoryController::class, 'create'])->name('admin.addCategory');
        Route::post('add-category', [CategoryController::class, 'store'])->name('admin.addCategory');
        Route::get('edit-category/{id}', [CategoryController::class, 'edit'])->name('admin.editCategory');
        Route::post('update-category/{id}', [CategoryController::class, 'update'])->name('admin.updateCategory');
        Route::get('delete-category/{id}', [CategoryController::class, 'destroy'])->name('admin.deleteCategory');



        Route::get('Product', [ProductController::class, 'index'])->name('admin.Product');
        Route::get('add-Product', [ProductController::class, 'create'])->name('admin.addProduct');
        Route::post('add-Product', [ProductController::class, 'store'])->name('admin.addProduct');
        Route::get('edit-Product/{id}', [ProductController::class, 'edit'])->name('admin.editProduct');
        Route::post('update-Product/{id}', [ProductController::class, 'update'])->name('admin.updateProduct');
        Route::get('delete-Product/{id}', [ProductController::class, 'destroy'])->name('admin.deleteProduct');

        //partners

        // Route::get('partners', [PartnersController::class, 'index'])->name('admin.Partners');
        // Route::get('add-partners', [PartnersController::class, 'create'])->name('admin.addPartners');
        // Route::post('add-partners', [PartnersController::class, 'store'])->name('admin.addPartners');
        // Route::get('edit-partners/{id}', [PartnersController::class, 'edit'])->name('admin.editPartners');
        // Route::post('update-partners/{id}', [PartnersController::class, 'update'])->name('admin.updatePartners');
        // Route::get('delete-partners/{id}', [PartnersController::class, 'destroy'])->name('admin.deletePartners');

        Route::get('info', [InfoController::class, 'index'])->name('admin.Info');
        Route::get('add-info', [InfoController::class, 'create'])->name('admin.addInfo');
        Route::post('add-info', [InfoController::class, 'store'])->name('admin.addInfo');
        Route::get('edit-info/{id}', [InfoController::class, 'edit'])->name('admin.editInfo');
        Route::post('update-info/{id}', [InfoController::class, 'update'])->name('admin.updateInfo');
        Route::get('delete-info/{id}', [InfoController::class, 'destroy'])->name('admin.deleteInfo');


        Route::get('contact', [ContactsController::class, 'index'])->name('admin.Contacts');
        Route::get('add-contact', [ContactsController::class, 'create'])->name('admin.addContact');
        Route::post('add-contact', [ContactsController::class, 'store'])->name('admin.addContact');
        Route::get('edit-contact/{id}', [ContactsController::class, 'edit'])->name('admin.editContact');
        Route::post('update-contact/{id}', [ContactsController::class, 'update'])->name('admin.updateContact');
        Route::get('delete-contact/{id}', [ContactsController::class, 'destroy'])->name('admin.deleteContact');
    });
});

// Route::get('/', function () {
//     return view('home');
// })->name('home');

Route::get('/', [FrontpageController::class, 'home'])->name('home');

Route::get('about', function () {
    return view('about');
})->name('about');

Route::get('category', [FrontpageController::class, 'category'])->name('category');

Route::get('category/{slug}', [FrontpageController::class, 'categoryProduct'])->name('categoryProduct');

// Route::get('product', function () {
//     return view('product');
// })->name('product');

Route::get('quality', function () {
    return view('quality');
})->name('quality');

Route::get('contact', function () {
    return view('contact');
})->name('contact');

Route::get('event', function () {
    return view('event');
})->name('event');

Route::get('product-details/{id}', [FrontpageController::class, 'productDetails'])->name('productDetails');

// Route::get('product-details', function () {
//     return view('product-details');
// })->name('product-details');
