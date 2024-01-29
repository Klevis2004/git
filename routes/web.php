<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PostsController;
use GuzzleHttp\Middleware;
use Illuminate\Foundation\Console\AboutCommand;
use illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBagInterface;

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

// Route::get('/', function () {
//     return view('home.index');
// })->name('hello.home');

// Route::get('/contact', function () {
//     return view('home.contact');
// })->name('hello.contact');


Route::resource('posts', PostsController::class)->only('index', 'show', 'create', 'store', 'edit', 'update');
Route::get('/posts', [PostsController::class, 'index']);
// Route::get('/', [HomeController::class, 'home'])->name('hello.home');
// Route::get('/contact', [HomeController::class, 'contact'])->name('hello.contact');

// Route::get('/single', AboutController::class);

// Route::get('/posts/{id}', function ($id) use ($posts) {

//     abort_if(!isset($posts[$id]), 404);

//     return view('posts.show', ['post' => $posts[$id]]);
// })->name('hello.contact');

// Route::get('/posts', function () use ($posts) {
//     // dd(request()->all());
//     dd((int)request()->input('page', 1));
//     return view('posts.index', ['posts' => $posts]);
// });

// Route::get('days/{days_ago?}', function ($daysAgo = 20) {
//     return 'This was posted' . ' ' . $daysAgo . ' ' . 'days ago';
// })->name('hello.contact');




// Route::prefix('/fun')->name('fun.')->group(function () use ($posts) {
//     Route::get('/response', function () {
//         return redirect('/contact');
//     })->name('reponse');

//     Route::get('/back', function () {
//         return back();
//     })->name('back');

//     Route::get('/json', function () use ($posts) {
//         return response()->json($posts);
//     })->name('json');

//     Route::get('/download', function () {
//         return response()->download(public_path('/kl.png'));
//     })->name('download');

//     Route::get('/responses', function () use ($posts) {
//         return response($posts, 201)
//             ->header('Content-Type', 'application/json')
//             ->cookie('MY_COOKIE', 'Piotr Jura', 3600);
//     })->name('responses');
// });
