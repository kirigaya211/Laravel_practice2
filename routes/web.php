<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';




// Route::get('/', function () {
//     return view('post.index');
// });


// Route::get('/post', [PostsController::class, 'index']);

// Route::get('/post', PostsController::class);

// Route::get('/home', [HomeController::class, 'home']);

// // Route::get('/single', AboutController::class);

// Route::resource('post', PostsController::class);

// Route::view('/home', 'home')->name('home');
// Route::view('/contact', 'contact')->name('contact');
// Route::get('/', 'HomeController@home')->name('home');
// Route::get('/contact', 'HomeController@contact')->name('contact');
// Route::resource('/posts', 'PostsController');

// Route::get('/home', HomeController::class, 'home')->name('home.home');
// Route::get('/contact', HomeController::class, 'contact')->name('contact.home');
// Route::get('/home', function(){
//     return view('home');
// })->name('home.home');
// Route::get('/contact', function(){
//     return view('contact');
// })->name('contact.contact');

Route::resource('/posts', PostsController::class);

Route::controller(HomeController::class)->group(function(){
    Route::get('/home','home')->name('home.home');
    Route::get('/contact','contact')->name('contact.contact');
});