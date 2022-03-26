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

//////////////////////////////////////////////////////////
//////////////////Front ROUTES///////////////////////////
////////////////////////////////////////////////////////

Route::namespace('Front')->group(function (){

//HomePage
    Route::get('/','HomeController@index')->name('front.homepage');
//aboutUs
    Route::get('/aboutUs','AboutController@about')->name('front.about');
//portfolio
    Route::get('/portfolio','PortfolioController@portfolio')->name('front.portfolio');
//process
    Route::get('/process','HomeController@process')->name('front.process');
//cats - serves
    Route::get('/cat','CatController@index')->name('front.cat');
    Route::get('/serves/{id}','ServeController@index')->name('front.serve');
//contact
    Route::get('/contact','ContactController@index')->name('contact.show');
    Route::post('/message','ContactController@message')->name('message');
//message
});

//////////////////////////////////////////////////////////
//////////////////ADMIN ROUTES///////////////////////////
////////////////////////////////////////////////////////

Auth::routes();
//Admin Controller
Route::namespace('Admin')->prefix('admin')->group(function (){

    //homePage
    Route::get('/', 'HomeController@index')->name('admin');
    Route::get('/logout/', 'HomeController@logout')->name('admin.home.logout');
    //Message
    Route::prefix('message')->group(function () {
    Route::get('/', 'MessageController@index')->name('admin.message');
    Route::get('/delete/{id}', 'MessageController@delete')->name('admin.message.delete');
    });
    //About
    Route::prefix('about')->group(function () {
        Route::get('/', 'AboutController@index')->name('admin.about.index');
        Route::get('/create', 'AboutController@create')->name('admin.about.create');
        Route::post('/store', 'AboutController@store')->name('admin.about.store');
        Route::get('/edit/{id}', 'AboutController@edit')->name('admin.about.edit');
        Route::post('/update', 'AboutController@update')->name('admin.about.update');
        Route::get('/delete/{id}', 'AboutController@delete')->name('admin.about.delete');
    });
    //portfolio
    Route::prefix('portfolio')->group(function () {
        Route::get('/', 'PortfolioController@index')->name('admin.portfolio.index');
        Route::get('/create', 'PortfolioController@create')->name('admin.portfolio.create');
        Route::post('/store', 'PortfolioController@store')->name('admin.portfolio.store');
        Route::get('/edit/{id}', 'PortfolioController@edit')->name('admin.portfolio.edit');
        Route::post('/update', 'PortfolioController@update')->name('admin.portfolio.update');
        Route::get('/delete/{id}', 'PortfolioController@delete')->name('admin.portfolio.delete');
    });
    //Category
    Route::prefix('cat')->group(function () {
        Route::get('/', 'CatController@index')->name('admin.cat.index');
        Route::get('/create', 'CatController@create')->name('admin.cat.create');
        Route::post('/store', 'CatController@store')->name('admin.cat.store');
        Route::get('/edit/{id}', 'CatController@edit')->name('admin.cat.edit');
        Route::post('/update', 'CatController@update')->name('admin.cat.update');
        Route::get('/delete/{id}', 'CatController@delete')->name('admin.cat.delete');
    });
    //services
    Route::prefix('serves')->group(function () {
        Route::get('/', 'ServeController@index')->name('admin.serves.index');
        Route::get('/create', 'ServeController@create')->name('admin.serves.create');
        Route::post('/store', 'ServeController@store')->name('admin.serves.store');
        Route::get('/edit/{id}', 'ServeController@edit')->name('admin.serves.edit');
        Route::post('/update', 'ServeController@update')->name('admin.serves.update');
        Route::get('/delete/{id}', 'ServeController@delete')->name('admin.serves.delete');
    });

});

