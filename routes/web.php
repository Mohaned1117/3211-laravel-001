<?php

use Illuminate\Support\Facades\Route;

// use App\Http\Controllers\ProductController;
// use App\Http\Controllers\UserController;
// use App\Http\Controllers\CommentController;
// use App\Http\Controllers\ServiceController;
// use App\Http\Controllers\ItemController;
use App\Http\Controllers\{
    InitController,
    ProductController,
    UserController,
// UserController,
    // CommentController,
    // ServiceController,
    // ItemController,
};

Route::view('/', 'welcome');

Route::view('about', 'about');

Route::view('services/web', 'services.web-apps');

Route::redirect('contact', 'find-us', 301);

Route::view('find-us', 'contact');

Route::view('posts', 'posts.index');

Route::get('posts/{post}', fn($post) => view('posts.view', ['post' => $post]));

// Route::get('products', 'App\Http\Controllers\ProductController@index');
// Route::get('products/{product}', 'App\Http\Controllers\ProductController@show');

// Route::get('products', ['App\Http\Controllers\ProductController', 'index']);
// Route::get('products/{product}', ['App\Http\Controllers\ProductController', 'show']);

// Route::get('products', [App\Http\Controllers\ProductController::class, 'index']);
// Route::get('products/{product}', [App\Http\Controllers\ProductController::class, 'show']);

// Route::get('products', [ProductController::class, 'index']);
// Route::get('products/{product}', [ProductController::class, 'show']);

// Group multiple methods in a single Controller: SYNTAX
// Route::controller(ProductController::class)->group(function () { });
// Route::controller(ProductController::class)->group(function () {
//     Route::get('products', 'index');
//     Route::get('products/{product}', 'show');
// });

// Route::prefix('products')->controller(ProductController::class)->group(function () {
//     Route::get('', 'index');
//     Route::get('{product}', 'show');
// });

// Route::resource('products', ProductController::class);
// Route::resource('users', UserController::class);
// Route::resource('comments', CommentController::class);
// Route::resource('services', ServiceController::class);
// Route::resource('items', ItemController::class);

Route::resources([
    'users' => UserController::class
]);

// Create the following controllers
// 'users' 
// 'comments' 
// 'services' 
// 'items' 

Route::controller(InitController::class)->prefix('init')->group(
    function () {
        Route::get('models', 'models');
        Route::get('seed', 'seed');
        Route::get('db-fresh', 'dbFresh');
        Route::get('db-fresh-seed', 'dbFreshSeed');
    }
);


Route::fallback(fn() => view('404'));
