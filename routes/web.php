<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\LoginController;
use App\Http\Controllers\backend\HomeController;
use App\Http\Controllers\backend\UserController;


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
});

Route::middleware(['auth:sanctum', 'verified'])->get('/admin/dashboard',function () {
    return view('backend.dashboard.dashboard');
})->name('view.dashboard');

Route::prefix('admin')->group(function(){
Route::get('/login',[LoginController::class,'viewLogin'])->name('login');
Route::get('/register',[LoginController::class,'viewregister'])->name('view.registration');
Route::post('/login/post',[LoginController::class,'Loginpost'])->name('login.post');
Route::post('/register/post',[LoginController::class,'registerpost'])->name('post.registration');
Route::get('/logout',[LoginController::class,'logout'])->name('admin.logout');
});

Route::prefix('Admin/user')->group(function(){
 Route::get('/view',[UserController::class,'UserView'])->name('user.view');
 Route::post('/user_type/{id}',[UserController::class,'UserType'])->name('user.usertype.update');
});
