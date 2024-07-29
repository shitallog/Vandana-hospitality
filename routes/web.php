<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\aboutController;
use App\Http\Controllers\ServicesController;



use App\Http\Controllers\Admin\{
    ProfileController,
    MailSettingController,
};

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
    return view('welcome');
})->name('welcome');




Route::get('/dashboard', function () {
    return view('front.dashboard');
})->middleware(['front'])->name('dashboard');


require __DIR__.'/front_auth.php';

// Admin routes
Route::get('/admin/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('admin.dashboard');

require __DIR__.'/auth.php';




Route::namespace('App\Http\Controllers\Admin')->name('admin.')->prefix('admin')
    ->group(function(){
        Route::resource('roles','RoleController');
        Route::resource('permissions','PermissionController');
        Route::resource('users','UserController');
        Route::resource('posts','PostController');

        Route::get('/profile',[ProfileController::class,'index'])->name('profile');
        Route::put('/profile-update',[ProfileController::class,'update'])->name('profile.update');
        Route::get('/mail',[MailSettingController::class,'index'])->name('mail.index');
        Route::put('/mail-update/{mailsetting}',[MailSettingController::class,'update'])->name('mail.update');
});
  
Route::resource('jobs', JobController::class);  





Route::get('/frontend/contact', [ContactController::class, 'index'])->name('frontend.contact');

Route::post('/frontend/contact', [ContactController::class, 'store'])->name('contact.us.store');








//
//Route::get('/frontend/index', [ServicesController::class, 'index'])->name('frontend.index');

// Careers route

Route::get('/frontend/careers', [CareerController::class, 'index'])->name('frontend.careers');
// Contact routes
Route::get('/frontend/contact', [ContactController::class, 'index'])->name('frontend.contact');
Route::post('/frontend/contact/send', [ContactController::class, 'send'])->name('frontend.contact.send');

//about
Route::get('/frontend/about', [aboutController::class, 'index'])->name('frontend.about');

// Route to display the  service page
Route::get('/frontend/hospital_housekeeping', [ServicesController::class, 'hospitalHousekeeping'])->name('frontend.hospital_housekeeping');

//Route::get('/frontend/patient-support-services', [ServicesController::class, 'patientsupportservices'])->name(' frontend.patient-support-services');

Route::get('/frontend/spring-cleaning-on-saturdays', [ServicesController::class, 'springcleaningonsaturdays'])->name('frontend.spring-cleaning-on-saturdays');

Route::get('/frontend/guest-house-operation-scope', [ServicesController::class, 'guesthouseoperationscope'])->name('frontend.guest-house-operation-scope');


//Route::get('/frontend/services-offered', [ServicesController::class, 'servicesoffered'])->name('frontend.services-offered');

Route::get('/frontend/general-maintenance-services', [ServicesController::class, 'generalmaintenanceservices'])->name('frontend.general-maintenance-services');

Route::get('/frontend/corporate-housekeeping', [ServicesController::class, 'corporatehousekeeping'])->name('frontend.corporate-housekeeping');

Route::get('/frontend/legal', [ServicesController::class, 'newlegal'])->name('frontend.legal');

Route::get('/frontend/patient-support-services', [ServicesController::class, 'patientsupportservices'])->name('frontend.patient-support-services');
Route::get('/frontend/services-offered', [ServicesController::class, 'servicesoffered'])->name('frontend.services-offered');

Route::get('/frontend/blog', [ServicesController::class, 'newblog'])->name('frontend.blog');

  //category
//Route::get('/category/index', [CategoryController::class, 'index'])->name('category.index');
//Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
//Route::post('/category/index', CategoryController::class .'@store')->name('category.store');
// returns a page that shows a full post
//Route::get('/category/{id}', CategoryController::class .'@show')->name('category.show');
// returns the form for editing a post
//Route::get('/category/{id}/edit', CategoryController::class .'@edit')->name('category.edit');
// updates a post
//Route::put('/category/{id}', CategoryController::class .'@update')->name('category.update');
// deletes a post
//Route::delete('/category/{id}', CategoryController::class .'@destroy')->name('category.destroy');
//product
//Route::get('/product/index', [ProductController::class, 'index'])->name('product.index');
//Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
//Route::post('/product/index',ProductController::class .'@store')->name('product.store');
// returns a page that shows a full post
//Route::get('/product/{id}',ProductController::class .'@show')->name('product.show');
// returns the form for editing a post
//Route::get('/product/{id}/edit', ProductController::class .'@edit')->name('product.edit');
// updates a post
//Route::put('/product/{id}', ProductController::class .'@update')->name('product.update');
// deletes a post
//Route::delete('/product/{id}', ProductController::class .'@destroy')->name('product.destroy');