<?php

use App\Models\Form;
use App\Models\User;
use App\Models\Approve;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
Route::group(['middleware'=>['admin:admin']],function (){
    Route::get('admin/login',[App\Http\Controllers\AdminController::class,'loginForm']);
    Route::post('admin/login',[App\Http\Controllers\AdminController::class,'store'])->name('admin.login');
});
Route::group(['middleware'=>['auth:admin']],function(){

    Route::middleware(['auth:sanctum,admin', 'verified'])->get('/admin/dashboard', function () {
        return view('admin.index');
    })->name('admin.dashboard');

    Route::get('admin/logout',[App\Http\Controllers\AdminController::class,'destroy'])->name('admin.logout');
    Route::get('admin/profile',[App\Http\Controllers\AdminProfileController::class,'profile'])->name('admin.profile');
    Route::get('admin/profile/edit',[App\Http\Controllers\AdminProfileController::class,'profileEdit'])->name('admin.profile.edit');
    Route::post('admin/profile/update',[App\Http\Controllers\AdminProfileController::class,'profileUpdate'])->name('admin.profile.update');
    Route::get('admin/change/password',[App\Http\Controllers\AdminProfileController::class,'ChangePassword'])->name('admin.change.password');
    Route::post('admin/update/password',[App\Http\Controllers\AdminProfileController::class,'UpdatePassword'])->name('admin.update.password');
});


    Route::get('user/profile',[App\Http\Controllers\UserController::class,'ShowUser'])->name('profile.user');


Route::middleware(['auth:sanctum,web', 'verified'])->get('/dashboard', function () {




$user_data = User::find(Auth::user()->id);
    return view('dashboard',compact('user_data'));
})->name('dashboard');

Route::get('/user/login/register',[App\Http\Controllers\UserController::class,'LoginRegister'])->name('login.register');
Route::get('/user/logout',[ Laravel\Fortify\Http\Controllers\AuthenticatedSessionController::class,'destroy'])->name('user.logout');
Route::post('/user/login',[ Laravel\Fortify\Http\Controllers\AuthenticatedSessionController::class,'store']);
Route::post('/user/register',[ Laravel\Fortify\Http\Controllers\RegisteredUserController::class,'store']);

//user registration form
Route::post('user/registration',[App\Http\Controllers\UserController::class,'store'])->name('user.reg');
Route::get('admin-user-registration/{id}',[App\Http\Controllers\UserAdminController::class,'ShowForm'])->name('show.form');
Route::post('admin/registration',[App\Http\Controllers\UserAdminController::class,'store'])->name('store.form');

//birth certificate
Route::get('certificate/{id}',[App\Http\Controllers\BirthController::class,'index'])->name('birth');
Route::get('user/info/',[App\Http\Controllers\BirthController::class,'UserInfo'])->name('user.info');
Route::post('user/status/pending/',[App\Http\Controllers\BirthController::class,'StatusPending'])->name('status.pending');
Route::post('user/status/approve/',[App\Http\Controllers\BirthController::class,'StatusApprove'])->name('status.approve');
//pdf download
Route::get('pdf/certificate/{id}',[App\Http\Controllers\BirthController::class,'pdfDownload'])->name('pdf.download');
//user change password
Route::get('user/change-password/',[App\Http\Controllers\UserController::class,'ChangePass'])->name('change.pass');
Route::post('user/update-password/',[App\Http\Controllers\UserController::class,'UpdatePass'])->name('update.pass');
//status active/inactive
Route::get('status/active/{id}',[App\Http\Controllers\BirthController::class,'Active'])->name('status.active');
Route::get('status/inactive/{id}',[App\Http\Controllers\BirthController::class,'InActive'])->name('status.inactive');
//edit part
Route::get('app/edit/{id}',[App\Http\Controllers\BirthController::class,'appEdit'])->name('app.edit');
