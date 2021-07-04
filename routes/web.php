<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
 
Auth::routes(); 
 
//Route::get('/', 'WelcomeController@index')->name('home'); 
Route::get('', 'WelcomeController@index');

Route::get('news', 'WelcomeController@allnews');

Route::get('readers-forum', 'WelcomeController@readers'); 

Route::get('contact', 'WelcomeController@contact'); 

Route::post('contact', 'WelcomeController@save');

Route::get('about', 'WelcomeController@about'); 

Route::get('help', 'WelcomeController@help'); 

// Route::get('about', function () {
//     return view('aboutus');
// });

// Route::get('help', function () {
//     return view('help');
// });

Route::post('/fetchProducts','WelcomeController@fetchProducts');

Route::get('news/{slug}', 'WelcomeController@news');

Route::get('readers-forum/{slug}', 'WelcomeController@readersnews');

Route::get('r/{region}', 'WelcomeController@region');

Route::get('c/{region}', 'WelcomeController@category');

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'admin'], function(){
	Route::get('login','Admin\LoginController@showLoginForm');
	Route::post('login','Admin\LoginController@login');      
    Route::middleware([SuperAdmin::class])->group(function () {
        Route::resources([
            'banners' => 'Admin\BannerController',
            'news' => 'Admin\CoursesController',
            'persons' => 'Admin\PersonController',
            'contacts' => 'Admin\ContactController',
            'readers' => 'Admin\ReaderController',
            'images' => 'Admin\BanneController'
        ]);

        Route::get('home','Admin\HomeController@index')->name('adminHome');
    	Route::post('logout','Admin\LoginController@logout')->name('adminLogout');
	});
});
