<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\AdminLaporanController;
use App\Http\Controllers\AdminGazeboController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\User;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
    return view('home', [
        'title' => 'Home',
        'active' => 'home',
        'posts' => Post::latest()->filter(request(['search','author', 'category']))->paginate(5)->withQueryString()
    ]);
});
Route::get('/about', function () {
    return view('about',[
        'title' => 'Tentang',
        'active' => 'about'
    ]);
});

Route::get('/booking', function () {
    return view('booking',[
        'title' => 'Booking',
        'active' => 'booking'
    ]);
});



Route::get('/posts',[PostController::class,'index']);
Route::get('/posts/{post:slug}',[PostController::class,'show']);


Route::get('/categories', function(){
    return view ('categories',[
        'title' => 'Post Categories',
        "active" => "categories",
        'categories' => Category::all()
    ]);
});


// login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
// mengarah ke login authontikasi
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

// register
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// dashboard
Route::get('/dashboard',function(){
    return view('dashboard.index');
})->middleware('auth');
Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

// admin
Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');

// admin laporan
Route::resource('/dashboard/laporans', AdminLaporanController::class)->except('show')->middleware('admin');

// admin gazebo
Route::resource('/dashboard/gazebos', AdminGazeboController::class)->except('show');

// booking gazebo
Route::resource('/createbooking', BookingController::class)->except('show')->middleware('auth');
Route::post('/booking', [BookingController::class, 'store'])->middleware('auth');