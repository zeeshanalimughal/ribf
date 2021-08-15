<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Exhibitor;
use App\Http\Controllers\Auth\AdminAuthController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BulkEmailController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterUser;
use App\Http\Controllers\Users;
use App\Models\User;
// use App\Models\User;

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



Auth::routes();
// Route::get('/',[AdminController::class,'login']);
// Route::post('/',[User::class,'login']);

// Route::get('/', [Exhibitor::class,'index']);
// Route::get('/register',[Exhibitor::class,'register']);




Route::group(['middleware' => ['UserAuth']], function () {
    Route::get('/user', [Users::class, 'index']);
    Route::post('/user', [Users::class, 'exhibitor']);
    Route::get('/logoutUser',[Users::class,'logoutUser']);
});





Route::get('/admin', [AdminController::class, 'login']);
Route::post('/admin', [AdminController::class, 'adminLogin']);


// Route::get('/admin',[AdminController::class,'dashboard'])->name();

// Route::get('/admin/exhibitors',[AdminController::class,'exhibitors'])->name('admin.exhibitors');



Route::group(['middleware' => ['AdminAuth']], function () {

    // Route::get('/admin/dasboard', function () {
    //     $value = session('admin');
    //     $user =User::all()->where('email', $value)->first();
    //     $data = compact('user');
    //     return view('admin.layouts.sidebar')->with($data);
    // });



    Route::get('/logout', [AdminController::class, 'logoutAdmin']);
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);
    Route::get('/admin/allBooks', [AdminController::class, 'allBooks'])->name('admin.allBooks');

    Route::get('/admin/addExhibitors', [AdminController::class, 'addExhibitors'])->name('admin.addExhibitors');

    Route::get('/admin/profile', [AdminController::class, 'adminProfile'])->name('admin.profile');

    Route::get('admin/update-profile/{id}', [AdminController::class, 'editProfile'])->name('admin.update-profile');

    Route::get('admin/updatePic/{id}', [AdminController::class, 'updatePic'])->name('admin.updatePic');

    Route::get('admin/admin-reset-password/{id}', [AdminController::class, 'resetPassword'])->name('admin.update-profile');

    Route::post('/admin/updateAdminProfile', [AdminController::class, 'updateAdminProfile'])->name('admin.updateAdminProfile');

    Route::post('/admin/updateAdminPicture', [AdminController::class, 'updateAdminPicture'])->name('admin.updateAdminPicture');

    Route::post('/admin/updateAdminPassword', [AdminController::class, 'updateAdminPassword'])->name('admin.updateAdminPassword');

    Route::post('/admin/addExhibitors', [RegisterUser::class, 'create']);
    Route::get('/admin/exhibitors', [RegisterUser::class, 'view']);
    // Route::get('/admin/exhibitors/edit{id}',[RegisterUser::class,'edit']);

    Route::get('/admin/edit/{id}', [RegisterUser::class, 'edit']);
    Route::get('/admin/delete/{id}', [RegisterUser::class, 'destroy']);

    Route::get('/admin/deleteBook/{id}', [AdminController::class, 'deleteBook']);


    Route::get('/admin/detailsBook/{id}', [AdminController::class, 'detailsBook']);

    Route::post('/admin/updateExhibitor', [RegisterUser::class, 'update'])->name('admin.updateExhibitor');
    Route::get('/admin/status/{id}', [RegisterUser::class, 'status'])->name('admin.updateExhibitor');
    Route::get('/admin/bookStatus/{id}', [RegisterUser::class, 'bookStatus'])->name('admin.updateExhibitor');


    Route::post('/admin/bulkEmail/send',[BulkEmailController::class,'sendEmailNotification'])->name('sendEmail');
    Route::get('/admin/bulkEmail',[HomeController::class,'bulkEmail'])->name('bulkEmail');

});



Route::get('/',[Users::class,'userLogin']);
Route::post('/',[Users::class,'loginExhibitor']);



// Route::get('/send/{email}',[HomeController::class,'sendEmailNotification']);

// Route::get('/',[AdminController::class,'login']);
// Route::post('/admin/login',[AdminController::class,'store']);
