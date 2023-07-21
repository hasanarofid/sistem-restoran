<?php

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
// Route::get('/', function(){
//     return redirect('/login');
// });

Route::get('/', 'HomeController@index')->name('home.index');
Route::get('about', 'HomeController@about');

// Route::get('/', 'HomeController@index')->name('home.index');
// Route::get('/', 'AdminController@index')->name('admin.index')->middleware(['auth']);
Route::post('/susbcribe', 'NewsletterController@add')->name('newsletter.add');

Route::get('/dashboard', 'AdminController@index')->name('admin.index')->middleware(['auth','admin']);
Route::patch('/dashboard', 'AdminController@updatereminder')->name('admin.reminder')->middleware(['auth','admin']);

Route::get('/order', 'AdminController@order')->name('admin.order')->middleware(['auth','admin']);
Route::get('/order/{id}', 'AdminController@show_order')->name('admin.showorder')->middleware(['auth','admin']);

Route::get('/user', 'AdminController@user')->name('admin.user')->middleware(['auth','admin']);

Route::get('/admin-product', 'ProductController@list')->name('admin.product')->middleware(['auth','admin']);
//improve setting profile market
Route::get('/admin-profile', 'ProfilemarketController@index')->name('admin.profile')->middleware(['auth','admin']);
Route::get('/admin-profileedit', 'ProfilemarketController@edit')->name('admin.profileedit')->middleware(['auth','admin']);
Route::post('/admin-profileupdate', 'ProfilemarketController@update')->name('admin.profileupdate')->middleware(['auth','admin']);
//end

//improve rekening
Route::get('/admin-rekening', 'RekeningController@index')->name('admin.rekening')->middleware(['auth','admin']);
Route::get('/admin-rekeningtambah', 'RekeningController@tambah')->name('admin.rekeningtambah')->middleware(['auth','admin']);
Route::get('/admin-rekening/edit/{id}', 'RekeningController@edit')->name('admin.rekeningedit')->middleware(['auth','admin']);
Route::get('/admin-rekening/disable/{id}', 'RekeningController@disable')->name('admin.disableedit')->middleware(['auth','admin']);
Route::get('/admin-rekening/hapus/{id}', 'RekeningController@hapus')->name('admin.rekeninghapus')->middleware(['auth','admin']);
Route::post('/admin-rekeningupdate', 'RekeningController@update')->name('admin.rekeningupdate')->middleware(['auth','admin']);
Route::post('/admin-rekeningsave', 'RekeningController@save')->name('admin.rekeningsave')->middleware(['auth','admin']);

//end

Route::get('/admin-product/add', 'ProductController@form')->name('admin.addform')->middleware(['auth','admin']);
Route::post('/admin-product/add', 'ProductController@create')->name('product.create')->middleware(['auth','admin']);
Route::get('/admin-product/edit/{id}', 'ProductController@editform')->name('product.editform')->middleware(['auth','admin']);
Route::patch('/admin-product/edit/{id}', 'ProductController@edit')->name('product.edit')->middleware(['auth','admin']);
Route::get('/admin-product/remove/{id}', 'ProductController@remove')->name('product.remove')->middleware(['auth','admin']);

Route::get('/admin-stock', 'StockController@index')->name('admin.stock')->middleware(['auth','admin']);
Route::get('/admin-stock/show', 'StockController@show')->name('admin.stockshow')->middleware(['auth','admin']);
Route::get('/admin-stock/remove/{id}', 'StockController@remove')->name('admin.removestock')->middleware(['auth','admin']);
Route::get('/admin-stock/edit/{id}', 'StockController@editform')->name('admin.editform')->middleware(['auth','admin']);
Route::patch('/admin-stock/edit/{id}', 'StockController@editstock')->name('admin.editstock')->middleware(['auth','admin']);

Route::get('/admin-stock/add', 'StockController@addform')->name('admin.addstockform')->middleware(['auth','admin']);
Route::post('/admin-stock/add', 'StockController@addstock')->name('admin.addstock')->middleware(['auth','admin']);

Route::get('/product','ProductController@index')->name('product.index');
Route::get('/product/filter','ProductController@filter')->name('product.filter');

Route::get('/product/{product}','ProductController@show')->name('product.show');

Route::get('/cart','CartController@index')->name('cart.index');
Route::get('/cart/add/{product}','CartController@add')->name('cart.add');
Route::get('/cart/remove/{id}','CartController@remove')->name('cart.remove');

Route::get('/checkout','CheckoutController@index')->name('checkout.index')->middleware('auth');
Route::post('/checkout','CheckoutController@checkout')->name('checkout')->middleware('auth');

Route::get('/user/order','OrderController@show')->name('order.show')->middleware('auth');

Route::get('/profile/{user}/edit','ProfileController@edit')->name('profile.edit')->middleware('auth');
Route::patch('/profile/{user}','ProfileController@update')->name('profile.update')->middleware('auth');

Auth::routes();

Route::get('logo/{filename?}', function ($filename) {
    $path = storage_path('app/public/profile/' . $filename);

    $file = File::get($path);
    $type = File::mimeType($path);
    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);
    return $response;
})->name('logo');

Route::get('favicon/{filename?}', function ($filename) {
    $path = storage_path('app/public/favicon/' . $filename);

    $file = File::get($path);
    $type = File::mimeType($path);
    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);
    return $response;
})->name('favicon');
