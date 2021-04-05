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

// Route::get('/', function () {
//     return view('home');
// });
Route::get('/', function () {
    return view('welcome');
});
Route::get('/nguyen-thi-trang', function () {
    return view('trang');
});

Route::prefix('/admin')->group(function(){
    Route::middleware(['auth'])->group(function(){
        Route::get('/dashboard','App\Http\Controllers\Admin\v1\Dashboard\DashboardController@indexAction')->name('Dashboard');

        Route::get('/user','App\Http\Controllers\Admin\v1\User\UserController@indexAction')->name('User');
        Route::get('/form-update-user/{id}','App\Http\Controllers\Admin\v1\User\FormUpdateUserController@indexAction')->name('FormUpdateUser');
        /**
         * form create
         */
        Route::get('/create-user','App\Http\Controllers\Admin\v1\User\FormCreateUserController@indexAction')->name('FormCreateUser');
        Route::post('/api-create-user','App\Http\Controllers\Admin\v1\User\CreateUserController@indexAction')->name('CreateUser');
        /**
         * API update user
         */
        Route::post('/update-user','App\Http\Controllers\Admin\v1\User\UpdateUserController@indexAction')->name('UpdateUser');
        /**
         * API update upload-image
         */
        Route::post('/upload-image','App\Http\Controllers\Admin\v1\Upload\UploadImageController@indexAction')->name('UploadImage');
        /**
         * API update upload-scancode
         */
        Route::post('/upload-image/scancode','App\Http\Controllers\Admin\v1\Upload\UploadImageScancodeController@indexAction')->name('UploadImageScancodeController');
        /**
         * Logout
         */
        Route::get('/log-out','App\Http\Controllers\Admin\v1\LogoutController@logout')->name('Logout');
    });
});


Route::prefix('/admin-user')->group(function(){
    Route::get('/register','App\Http\Controllers\Admin\v1\User\UserRegisterController@indexAction')->name('Register'); 
    Route::get('/login','App\Http\Controllers\Admin\v1\User\UserLoginController@indexAction')->name('Login'); 
    Route::get('/forgot-password','App\Http\Controllers\Admin\v1\User\UserForgotPasswordController@indexAction')->name('ForgotPassword'); 
    Route::get('/reset-password','App\Http\Controllers\Admin\v1\User\UserResetPasswordController@indexAction')->name('ResetPassword'); 
});

Route::prefix('/ajax')->group(function(){
        Route::post('/register-action','App\Http\Controllers\Admin\v1\Ajax\UserRegisterController@indexAction')->name('RegisterAction');
        Route::post('/login-action','App\Http\Controllers\Admin\v1\Ajax\UserLoginController@indexAction')->name('LoginAction');
        Route::post('/forgot-password-action','App\Http\Controllers\Admin\v1\Ajax\UserForgotPasswordActionController@indexAction')->name('ForgotPasswordAction');
        Route::post('/reset-password-action','App\Http\Controllers\Admin\v1\Ajax\UserForgotPasswordActionController@actionReset')->name('ResetPasswordAction');
});