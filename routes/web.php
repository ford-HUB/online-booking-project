<?php

use App\Http\Controllers\admin\viewController;
use App\Http\Controllers\admin\userDataController;
use App\Http\Controllers\admin\postController;
use App\Http\Controllers\auth\loginController;
use App\Http\Controllers\auth_admin\login_adminController;
use App\Http\Controllers\auth\registerController;
use App\Http\Controllers\view\adminController;
use App\Http\Controllers\view\guestController;
use App\Http\Controllers\view\userController;
use App\Http\Middleware\rememberMeToken;
use Illuminate\Support\Facades\Route;


//default landing page
Route::get('/', [guestController::class, 'index']); 

//Routes for registration
Route::get('register', [registerController::class, 'index']);
Route::post('register', [registerController::class, 'registerData'])->name('register');



//Routes for login
Route::get('login', [loginController::class, 'index']);
Route::post('login', [loginController::class, 'loginData'])->name('login');
Route::post('logout', [loginController::class, 'logout'])->name('logout');

//route to check for remember me cookies
Route::get('check-remember-me', [LoginController::class, 'checkToken'])->name('checkToken')
    ->middleware(rememberMeToken::class);

//Routes admin login
Route::get('login admin', [login_adminController::class, 'index']);
Route::post('login admin', [login_adminController::class, 'loginAdmin'])->name('loginAdmin');
Route::post('logout admin', [login_adminController::class, 'logout'])->name('logoutAdmin');


//guest page authenticated
Route::get('destination', [guestController::class, 'destination']);

//user page authenticated
Route::middleware('auth', 'role:user')->get('/user/home', [userController::class, 'index'])
    ->name('user.home');

//admin page authenticated
Route::middleware('auth', 'role:admin')->get('/admin/home', [adminController::class, 'index'])
    ->name('admin.home');

Route::middleware('auth', 'role:admin')->get('/admin/dashboard', [adminController::class, 'dashboard'])
    ->name('admin.dashboard');

Route::middleware('auth', 'role:admin')->get('/admin/post', [adminController::class, 'post'])
    ->name('admin.post');
Route::middleware('auth', 'role:admin')->post('/admin/post', [postController::class, 'store'])
    ->name('admin.post');
    



  
Route::middleware('auth', 'role:admin')->get('/admin/view post', [adminController::class, 'view']);

Route::middleware('auth', 'role:admin')->put('/admin/edit/{id}', [viewController::class, 'update'])
    ->name('admin.edit.update');
Route::middleware('auth', 'role:admin')->put('/admin/edit profile/{id}', [userDataController::class, 'update'])
    ->name('admin.profile.update');

Route::middleware('auth', 'role:admin')->delete('/admin/delete/{id}', [viewController::class, 'delete'])
    ->name('admin.edit.delete');

Route::middleware('auth', 'role:admin')->delete('/admin/edit profile/{id}', [userDataController::class, 'delete'])
    ->name('admin.profile.delete');

Route::middleware('auth', 'role:admin')->get('/admin/view users', [adminController::class, 'users'])
    ->name('admin.users');

Route::middleware('auth', 'role:admin')->get('/admin/list of bookings', [adminController::class, 'bookings'])
    ->name('admin.bookings');

Route::middleware('auth', 'role:admin')->get('/admin/approval bookings', [adminController::class, 'approvalBookings'])
    ->name('admin.approvalBook');




