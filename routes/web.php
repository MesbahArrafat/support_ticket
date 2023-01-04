<?php

use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserDetailsController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SupportCategoryController;
use App\Http\Controllers\SupportRequestController;
use App\Http\Controllers\SupportRequestUpdateController;
use Illuminate\Support\Facades\Auth;

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


Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');


Route::middleware(['auth'])->group(function () {

    //    Sidebar Route
    Route::get('/', function () {
        return view('backend.pages.dashboard');
    })->name('home');
    Route::get('/dashboard', function () {
        return view('backend.pages.dashboard');
    })->name('dashboard');
    
    Route::get('/formelement', function () {
        return view('backend.pages.formelement');
    })->name('form');
    
    Route::get('/listpage', function () {
        return view('backend.pages.listpage');
    })->name('listpage');
    
    Route::get('/gallery', function () {
        return view('backend.pages.gallery');
    })->name('gallery');
    
    Route::get('/viewpage', function () {
        return view('backend.pages.viewpage');
    })->name('viewpage');

    // User Route
Route::get('/users', [UserController::class, 'Users'])->name('users');
Route::get('/adduser', [UserController::class, 'addUser'])->name('adduser');
Route::get('/manageusers', [UserController::class, 'manageUsers'])->name('manageusers');
Route::post('/userstore', [UserController::class, 'userStore'])->name('userstore');
Route::get('/updateuserstatus/{id}', [UserController::class, 'updateUserStatus'])->name('updateuserstatus');
Route::get('/edituser/{id}', [UserController::class, 'editUser'])->name('edituser');
Route::post('/updateuser/{id}', [UserController::class, 'updateUser'])->name('updateuser');
Route::get('/deleteuser/{id}', [UserController::class, 'deleteUser'])->name('deleteuser');


// User Details Route
Route::get('/users_details', [UserDetailsController::class, 'UsersDetails'])->name('user.details.list');
Route::get('/adduser_details', [UserDetailsController::class, 'addUserDetails'])->name('adduser.details');
Route::get('/manageuser-details', [UserDetailsController::class, 'manageUsersDetails'])->name('manageusers.details');
Route::post('/user_details_store', [UserDetailsController::class, 'userDetailsStore'])->name('user.details.store');
Route::get('/edituser_details/{id}', [UserDetailsController::class, 'editUserDetails'])->name('edituser.details');
Route::post('/updateuser_details/{id}', [UserDetailsController::class, 'updateUserDetails'])->name('updateuser.details');
Route::get('/deleteuser_details/{id}', [UserDetailsController::class, 'deleteUserDetails'])->name('deleteuser.details');

// Project Route
Route::get('/allproject', [ProjectController::class, 'Projects'])->name('allproject');
Route::get('/addproject', [ProjectController::class, 'addProject'])->name('addproject');
Route::get('/manageproject', [ProjectController::class, 'manageProject'])->name('manageproject');
Route::post('/projectstore', [ProjectController::class, 'projectStore'])->name('projectstore');
Route::get('/updateprojectstatus/{id}', [ProjectController::class, 'updateProjectStatus'])->name('updateprojectstatus');
Route::get('/editproject/{id}', [ProjectController::class, 'editProject'])->name('editproject');
Route::post('/updateproject/{id}', [ProjectController::class, 'updateProject'])->name('updateproject');
Route::get('/deleteproject/{id}', [ProjectController::class, 'deleteProject'])->name('deleteproject');


// Support category Route
Route::get('/add_support_category', [SupportCategoryController::class, 'addSupportCategory'])->name('addSupportCategory');
Route::get('/edit_support_category/{id}', [SupportCategoryController::class, 'editSupportCategory'])->name('editSupportCategory');
Route::get('/manage_support_category', [SupportCategoryController::class, 'manageSupportCategory'])->name('manageSupportCategory');
Route::get('/all_support_category', [SupportCategoryController::class, 'SupportCategorys'])->name('allSupportCategory');
Route::post('/store_support_category', [SupportCategoryController::class, 'storeSupportCategory'])->name('storeSupportCategory');
Route::post('/update_support_category/{id}', [SupportCategoryController::class, 'updateSupportCategory'])->name('updateSupportCategory');
Route::get('/delete_support_category/{id}', [SupportCategoryController::class, 'deleteSupportCategory'])->name('deleteSupportCategory');


// Support Request Route
Route::get('/add_support_request', [SupportRequestController::class, 'addSupportRequest'])->name('addSupportRequest');
Route::get('/edit_support_request/{id}', [SupportRequestController::class, 'editSupportRequest'])->name('editSupportRequest');
Route::get('/view_support_request/{id}', [SupportRequestController::class, 'viewSupportRequest'])->name('viewSupportRequest');

Route::get('/manage_support_request', [SupportRequestController::class, 'manageSupportRequest'])->name('manageSupportRequest');
Route::get('/customer_manage_support_request', [SupportRequestController::class, 'customerManageSupportRequest'])->name('customer_manageSupportRequest');
Route::get('/employee_manage_support_request', [SupportRequestController::class, 'employeeManageSupportRequest'])->name('employee_manageSupportRequest');

Route::get('/all_support_request', [SupportRequestController::class, 'SupportRequests'])->name('allSupportRequest');
Route::get('/customer_all_support_request', [SupportRequestController::class, 'onlyUserRequests'])->name('customerallSupportRequest');
Route::post('/store_support_request', [SupportRequestController::class, 'storeSupportRequest'])->name('storeSupportRequest');
Route::get('/update_support_request_status/{id}', [SupportRequestController::class, 'updateSupportRequestStatus'])->name('updateSupportRequestStatus');



Route::post('/customer_update_support_request/{id}', [SupportRequestController::class, 'customerUpdateSupportRequest'])->name('customerUpdateSupportRequest');

Route::post('/update_support_request/{id}', [SupportRequestController::class, 'updateSupportRequest'])->name('updateSupportRequest');


Route::get('/delete_support_request/{id}', [SupportRequestController::class, 'deleteSupportRequest'])->name('deleteSupportRequest');


// Support Request Update Route
Route::get('/view_support_request_update/{id}', [SupportRequestUpdateController::class, 'viewSupportRequestUpdate'])->name('viewSupportRequestUpdate');
Route::post('/comments.store', [CommentController::class, 'store'])->name('comments.store');
Route::get('/edit_comment/{id}', [CommentController::class, 'edit'])->name('edit.comment');
Route::post('/update_comment/{id}', [CommentController::class, 'update'])->name('update.comment');

});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('app-logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('app.logout');
