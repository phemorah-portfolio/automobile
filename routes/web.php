<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');

// Route::prefix('/admin')->namespace('Admin')->group(function(){
Route::group(['middleware'=>['dashboard']],function(){
    Route::prefix('/auto')->namespace('Admin')->group(function(){
      // Vehicle make routes
      Route::get('makes','AutoController@makes');
      Route::match(['get','post'],'add-edit-make/{id?}','AutoController@addEditMake');

      // Vehicle routes
      Route::get('vehicles','AutoController@vehicles');
      Route::get('bodies','AutoController@bodies');
      Route::get('models','AutoController@models');
      Route::get('manufacturers','AutoController@manufacturers');

      Route::get('delete/{table}/{column}/{id}','AdminController@dynamicDelete');
      Route::match(['get','post'],'add-edit-form-table/{table}/{id?}','AdminController@dynamicAddEditFormTable');
    });

    // Site administrator routes
    Route::get('delete-admin/{id}','Admin\AdminController@deleteAdmin');
    Route::get('administrators','Admin\AdminController@administrators');
    Route::match(['get','post'],'/add-edit-admin/{id?}','Admin\AdminController@addEditAdmin');

    // Site Role Routes
    Route::get('site-roles','Admin\RoleController@siteRoles');
    Route::match(['get','post'],'/add-edit-site-role/{id?}','Admin\RoleController@addEditSiteRole');
    Route::post('fetch-role-details','Admin\RoleController@fetchRoleDetails');

    // Position Routes
    Route::get('positions','Admin\RoleController@positions');
    Route::match(['get','post'],'/add-edit-position/{id?}','Admin\RoleController@addEditPosition');

    // Department Routes
    Route::get('departments','Admin\DepartmentController@departments');
    Route::match(['get','post'],'/add-edit-department/{id?}','Admin\DepartmentController@addEditDepartment');

    Route::post('check-current-pswd','Admin\UserController@checkCurrentPassword');
    Route::match(['get', 'post'], 'update-pswd', 'Admin\UserController@updatePassword');
    // Logout
    Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
    // Dashboard
    Route::get('dashboard','Admin\AdminController@dashboard');

    // Sections
    Route::get('sections', 'SectionController@sections');
    Route::post('update-section-status', 'SectionController@updateSectionStatus');
    // Categories
    Route::get('categories','CategoryController@categories');
    Route::post('update-category-status', 'CategoryController@updateStatus');
    Route::match(['get','post'],'/delete-category/{id}','CategoryController@deleteCategory');
    Route::match(['get','post'],'/add-edit-employee/{id?}','Admin\UserController@addEditEmployee');
    Route::post('/fetch-section-categories','CategoryController@fetchCategories');

          // Features Access
    // Route::match(['get','post'],'/add-edit-feature/{id?}','Admin\AdminController@addEditFeature');
    Route::get('features-access','Admin\AdminController@FeaturesAccess');
    Route::match(['get','post'],'/add-remove-feature-access/{id?}','Admin\AdminController@addRemoveFeatureAccess');
    Route::match(['get','post'],'/add-edit-feature/{id?}','Admin\AdminController@addEditFeature');
    Route::match(['get','post'],'/delete-feature/{id}','Admin\AdminController@deleteFeature');

    // User Management Routes
    Route::get('delete-employee/{id}','Admin\UserController@deleteEmployee');
    Route::get('employees/{id?}','Admin\UserController@employees');
    Route::post('fetch-user-details','Admin\UserController@fetchUserDetails');
});
// });

Route::get('/{page?}', 'Frontend\PagesController@page');

Auth::routes(['register' => false]);

Auth::routes();
