<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

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

Route::get('/','FrontController@index');
Route::get('/services','FrontController@services');
Route::get('category/services/{id}','FrontController@catServices');
Route::get('/about','FrontController@about');
Route::get('/how-we-work','FrontController@work');
Route::get('/testimonial','FrontController@testimonial');
Route::get('/contact','FrontController@contact');
Route::get('/service-providers','FrontController@serviceProviders');
Route::get('/service-providers/fav/{id}','FrontController@favServiceProvider');
Route::get('categories/sort/ascending','FrontController@sortCatAscending')->name('category.ascending');
Route::get('categories/sort/descending','FrontController@sortCatDescending')->name('category.ascending');

Auth::routes(['verify' => true]);

Route::group(['prefix' => 'admin','middleware' => ['auth', 'admin']], function() {

    Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

    Route::get('/service/requests', 'HomeController@servicerequests');
    // banner image for admin
    Route::resource('banner', 'BannerImageController');
    Route::get('banner', 'BannerImageController@index')->name('bannerImages');
    Route::resource('/add-banner', 'BannerImageController@store');
    Route::post('banner/delete/{id}', 'BannerImageController@destroy')->name('banner.delete');
    Route::get('banner/edit/{id}', 'BannerImageController@edit')->name('banner.edit');
    Route::any('banner/update/{id}', 'BannerImageController@update');
    Route::any('add-banner-image','BannerImageController@create');

    // Route::resource('service/categories', 'CategoryController');
    Route::get('/service/categories', 'CategoryController@index')->name('categories');
    Route::get('service-categories', 'CategoryController@create');
    Route::post('service-categories/store', 'CategoryController@store');
    Route::any('service-categories/edit/{id}', 'CategoryController@edit')->name('edit.category');
    Route::post('service-categories/update/{id}', 'CategoryController@update');
    Route::post('service-categories/delete/{id}', 'CategoryController@destroy')->name('delete.category');
    Route::get('service', 'CategoryController@getData')->name('productCategories');

    //admin CRUD of Services
    Route::post('delete/service/{id}', 'ServicesController@destroy')->name('delete.service');
    Route::any('add/service', 'ServicesController@create');
    Route::get('edit/service/{id}', 'ServicesController@edit')->name('edit.service');
    Route::any('update/service/{id}', 'ServicesController@update');
    Route::any('add-service', 'ServicesController@store');
    Route::get('service', 'ServicesController@index')->name('service.index');

    //admin CRUD of Service Providers
    Route::post('delete/service-provider/{id}', 'ServiceProviderController@destroy')->name('delete.service-provider');
    Route::any('add/service-provider', 'ServiceProviderController@create');
    Route::get('edit/service-provider/{id}', 'ServiceProviderController@edit')->name('edit.service-provider');
    Route::any('update/service-provider/{id}', 'ServiceProviderController@update');
    Route::any('add-service-provider', 'ServiceProviderController@store');
    Route::get('service-provider', 'ServiceProviderController@index')->name('service-provider.index');
    Route::get('service-provider/sort/ascending','ServiceProviderController@sortAscending')->name('serviceprovider.ascending');
    Route::get('service-provider/sort/descending','ServiceProviderController@sortDescending')->name('serviceprovider.ascending');

    //routes for Testimonials
    Route::get('testimonials', 'TestimonialController@index')->name('view.testimonial');
    Route::get('add/testimonial', 'TestimonialController@create')->name('add.testimonial');
    Route::post('store/testimonial', 'TestimonialController@store')->name('store.testimonial');
    Route::get('edit/testimonial/{id}', 'TestimonialController@edit')->name('edit.testimonial');
    Route::post('update/testimonial/{id}', 'TestimonialController@update')->name('update.testimonial');
    Route::post('delete/testimonial/{id}', 'TestimonialController@destroy')->name('delete.testimonial');

    Route::get('users',[UsersController::class,'index'])->name('users.index');
    Route::get('users/view/{id}',[UsersController::class,'show'])->name('users.view');
    Route::get('users-data',[UsersController::class,'getData'])->name('users.getData');
    Route::get('users/add',[UsersController::class,'create'])->name('users.create');
    Route::post('users/add/data',[UsersController::class,'store'])->name('users.store');
    Route::get('users/edit/{id}',[UsersController::class,'edit'])->name('users.edit');
    Route::post('users/update/{id}',[UsersController::class,'update'])->name('users.update');
    Route::post('users/delete/{id}',[UsersController::class,'destroy'])->name('users.delete');

    //Admin Routes for Service Requests
    Route::get('edit/service/requests/{id}','HomeController@editServiceRequest')->name('edit.service-requests');
    Route::any('update/service/requests/{id}','HomeController@updateServiceRequest')->name('update.service-requests');
    Route::post('delete/service/requests/{id}', 'HomeController@destroy')->name('servicerequests.delete');

    Route::get('settings','AdminController@viewSettings');
});
Route::group(['prefix' => 'customer','middleware' => 'auth'], function() {
    Route::get('/','CustomerController@index')->name('customer.index');
    Route::get('register/service/{sid}', 'CustomerController@registerService');
    Route::get('view/service/requests/{id}', 'CustomerController@viewServiceRequests');
    Route::get('view/completed/services', 'CustomerController@viewCompletedServices');
    Route::get('view/paid/services', 'CustomerController@viewPaidServices');
    Route::get('pay/service/{id}', 'CustomerController@payService');
    Route::post('register/service','CustomerController@finalServiceRegister');
    Route::get('settings','CustomerController@viewSettings');
    Route::get('change_password', 'ChangeCustomerPasswordController@showChangePasswordForm')->name('customer.change_password');
    Route::patch('change_password', 'ChangeCustomerPasswordController@changePassword')->name('customer.change_password');

    Route::get('reviews', 'TestimonialController@index')->name('view.testimonial');
    Route::get('add/review', 'TestimonialController@create')->name('add.testimonial');
    Route::post('store/review', 'TestimonialController@store')->name('store.testimonial');
    Route::get('edit/review/{id}', 'TestimonialController@edit')->name('edit.testimonial');
    Route::post('update/review/{id}', 'TestimonialController@update')->name('update.testimonial');
    Route::post('delete/review/{id}', 'TestimonialController@destroy')->name('delete.testimonial');
});


Route::get('change_password', 'Auth\ChangePasswordController@showChangePasswordForm')->name('auth.change_password');
Route::patch('change_password', 'Auth\ChangePasswordController@changePassword')->name('auth.change_password');
