<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PhotoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//JOBSHEET 1 (MEMBUAT KTP)
// Route::get('/', function () {
//     return view('KTP_Fitria');
// });

//JOBSHEET 2 (ROUTE)
// Route::get('/hello', function () {
//     return 'Hello World';
// });
Route::get('/world', function () {
    return 'World';
});
Route::get('/', function () {
    return 'Selamat Datang';
});
Route::get('/about', function () {
    return 'Ahmad Abror Rozaqi Fatoni  2241760123';
});
Route::get('/user/{fitria}', function ($name) {
    return 'Nama saya ' . $name;
});
Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke- ' . $postId . "Komentar ke- :" . $commentId;
});
Route::get('/articles/{id}', function ($articlesId) {
    return 'Halaman Artikel dengan ID :  ' . $articlesId;
});
Route::get('/user/{name?}', function ($name = null) {
    return 'Nama saya :  ' . $name;
});
Route::get('/user/{name?}', function ($name = 'John') {
    return 'Nama saya :  ' . $name;
});
//route name
Route::get('/user/profile', function () {
    //

})->name('profile');
Route::get(
    '/user/profile',
    [UserProfileController::class,'show']
)->name('profile');
// Generating URLs...
//$url = route('profile');
// Generating Redirects...
//return redirect()->route('profile');

Route::middleware(['first', 'second'])->group(function () {
    Route::get('/', function () {
    // Uses first & second middleware...
    });
    Route::get('/user/profile', function () {
    // Uses first & second middleware...
    });
    });
    Route::domain('{account}.example.com')->group(function () {
    Route::get('user/{id}', function ($account, $id) {

    });
    });
    Route::middleware('auth')->group(function () {
    Route::get('/user', [UserController::class, 'index']);
    Route::get('/post', [PostController::class, 'index']);
    Route::get('/event', [EventController::class, 'index']);
    });
    Route::prefix('admin')->group(function () {
        Route::get('/user', [UserController::class, 'index']);
        Route::get('/post', [PostController::class, 'index']);
        Route::get('/event', [EventController::class, 'index']);
        });
    Route::redirect('/here', '/there');
Route::view('/welcome', 'welcome');
Route::view('/welcome', 'welcome', ['name' => 'Taylor']);

//Controller Praktikum 2
Route::get('/hello', [WelcomeController::class,'hello']);

//Modifikasi poin 6
Route::get('/', [PageController::class, 'index']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/articles/{id}', [PageController::class, 'articles']);

//Modifikasi poin 7
Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'about']);
Route::get('/articles/{id}', [ArticleController::class, 'articles']);

//Resource Controller
Route::resource('photos', PhotoController::class);

Route::resource('photos', PhotoController::class)->only([
    'index', 'show'
    ]);
    Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
    ]);

//VIEW
//langsung direktori views
Route::get('/greeting', function () {
    return view('hello', ['name' => 'Ahmad Abror Rozaqi Fatoni']);
    });
//via direktori
Route::get('/greeting', function () {
        return view('JS2.hello', ['name' => 'Abror Rozaqi']);
        });
//via controller
Route::get('/greeting', [WelcomeController::class,
        'greeting']);