<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/profile', [UserController::class, 'show'])->name('profile');
Route::put('/profile', [UserController::class, 'update'])->name('profile.update');

Route::middleware(['auth'])->group(function () {

});

Route::get('/search', function () {
    $bloodType = 'O+';
    $donors = user::where('blood_type', $bloodType)->get();

    return view('search_results', compact('user'));
});


Route::put('/users/{id}', [UserController::class, 'update']);

// عرض استمارة الطلب
Route::get('/blood-request', function () {
    return view('blood-request.form');
});

// معالجة استمارة الطلب
Route::post('/blood-request', function (Request $request) {
    // قم بحفظ الطلب في قاعدة البيانات
    $bloodRequest = new App\Models\BloodRequest;
    $bloodRequest->name = $request->input('name');
    $bloodRequest->blood_group = $request->input('blood_group');
    $bloodRequest->save();

    // إعادة توجيه المستخدم بعد إرسال الطلب
    return redirect('/blood-request')->with('success', 'تم إرسال طلبك بنجاح!');
});
