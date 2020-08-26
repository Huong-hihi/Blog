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
// Route::get('/', function () {
//     //$role = Role::create(['name' => 'admin']);
//     $permission = Permission::create(['name' => 'view1 articles']);
//     $role = Role::find(1);
//     // $role->givePermissionTo($permission);
//     $permission->assignRole($role);

// });
// Gate::resource('Delete', 'DeletePolicy');

Route::get('/', function () {
    return view('welcome');
})->name('laravel');
//Route::get('/home','PagesController@index');
//Route::get('/ex', 'ArticlesController@ex');
Route::group(['middleware' => 'auth'], function () {
    Route::get('/articles/create', 'ArticlesController@create')->name('articles.create')->middleware('auth');
    Route::post('/articles/store', 'ArticlesController@store')->name('articles.store');
    Route::get('/articles', 'ArticlesController@index')->name('articles.index');
    Route::get('/article/{id}', 'ArticlesController@show')->name('baiviet');
    Route::get('/article/{id}/edit', 'ArticlesController@edit')->name('articles.edit')->middleware('auth');
    Route::post('/article/{id}', 'ArticlesController@update')->name('articles.update')->middleware('auth');
    Route::get('/article/{id}/delete', 'ArticlesController@destroy')->name('articles.delete')->middleware('auth');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
