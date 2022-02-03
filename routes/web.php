<?php

use App\Http\Resources\PostResource;
use App\Http\Controllers\ContactController;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('guest.welcome');
})->name('home');
/* products */
Route::get('products', 'ProductController@index')->name('products.index');
Route::get('products/{product}', 'ProductController@show')->name('products.show');
/*
    posts
  */
Route::get('posts', 'PostController@index')->name('posts.index');
Route::get('posts/{post}', 'PostController@show')->name('posts.show');
/*
    categories
  */
Route::get('categories/{category}/posts', 'CategoryController@posts')->name('categories.posts');
/* 
    tags
 */
Route::get('tags/{tag}/posts', 'TagController@posts')->name('tags.posts');

Auth::routes();

/*
contacts
 */
/* Route::get('contacts', 'PageController@contacts')->name('contacts');
Route::post('contacts', 'PageController@sendContact')->name('contacts.send'); */
Route::get('contacts', 'ContactController@show_c_page')->name('contacts');
Route::post('contacts', 'ContactController@sendStoreContact')->name('contacts.send');

/* 
api
*/
Route::get('blog', function () {
    return view('guest.api.blog');
})->name('blog');
/*
 admin
  */
Route::middleware('auth')->prefix('admin')->namespace('Admin')->name('admin.')->group(function () {
    Route::get('/', 'HomeController@index')->name('home');
    /*
     products 
     */
    Route::get('/products', 'ProductController@index')->name('products.index');
    Route::get('/products/create', 'ProductController@create')->name('products.create');
    Route::post('/products', 'ProductController@store')->name('products.store');
    Route::get('/products/{product}', 'ProductController@show')->name('products.show');
    Route::get('/products/{product}/edit', 'ProductController@edit')->name('products.edit');
    Route::put('/products/{product}', 'ProductController@update')->name('products.update');
    Route::delete('/products/{product}', 'ProductController@destroy')->name('products.destroy');
    /* 
    Post 
    */
    Route::get('/posts', 'PostController@index')->name('posts.index');
    Route::get('/posts/create', 'PostController@create')->name('posts.create');
    Route::post('/posts', 'PostController@store')->name('posts.store');
    Route::get('/posts/{post}', 'PostController@show')->name('posts.show');
    //Route::get('/posts/{slug}', 'PostController@show')->name('posts.show');
    Route::get('/posts/{post}/edit', 'PostController@edit')->name('posts.edit');
    Route::put('/posts/{post}', 'PostController@update')->name('posts.update');
    Route::delete('/posts/{post}', 'PostController@destroy')->name('posts.destroy');
    /* 
    categories
     */
    Route::get('/categories', 'CategoryController@index')->name('categories.index');
    Route::get('/categories/create', 'CategoryController@create')->name('categories.create');
    Route::post('/categoty', 'CategoryController@store')->name('categories.store');
    Route::delete('/categories/{category}', 'CategoryController@destroy')->name('categories.destroy');
    /*
     contacts 
     */
    //Route::resource('/contacts', ContactController::class)->only(['index']);
    Route::get('/contacts', 'ContactController@index')->name('contacts.index');
    Route::get('/contacts/{contact}', 'ContactController@show')->name('contacts.show');
});