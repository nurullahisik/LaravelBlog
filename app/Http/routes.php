<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
	return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {

	Route::group(['prefix' => 'blog'],function(){
		Route::get('/{yazi}','BlogController@postView');
		Route::get('/page/{sayfa}','BlogController@index');
		Route::get('/category/{categoryName}','BlogController@categoryPosts');

	});

	Route::group(['prefix' => 'kanepe'], function() {
		Route::get('/', function(){
			return view('deneme');
		});

		// Authentication Routes...
		$this->get('login', 'Auth\AuthController@showLoginForm');
		$this->post('login', 'Auth\AuthController@login');
		$this->get('logout', 'Auth\AuthController@logout');

		// Registration Routes...
		//$this->get('register', 'Auth\AuthController@showRegistrationForm');
		//$this->post('register', 'Auth\AuthController@register');

		// Password Reset Routes...
		$this->get('password/reset/{token?}', 'Auth\PasswordController@showResetForm');
		$this->post('password/email', 'Auth\PasswordController@sendResetLinkEmail');
		$this->post('password/reset', 'Auth\PasswordController@reset');

		Route::group(['middleware' => 'auth'], function() {

			Route::get('/', function(){
				return view('deneme');
			});

			Route::group(['prefix' => 'pages'], function() {
				Route::get('/create', 'PagesController@edit');
				Route::post('/save', 'PagesController@save');
				Route::get('/page/{id}', 'PagesController@edit');
				Route::get('/delete/{id}','PagesController@delete');
				Route::get('/{sayfa?}', 'PagesController@index');
			});

			Route::group(['prefix' => 'posts'],function(){
				Route::get('/create','PostsController@edit');
				Route::post('/save','PostsController@save');
				Route::get('/post/{id}','PostsController@edit');
				Route::get('/delete/{post}','PostsController@delete');
				Route::get('/{id?}','PostsController@posts');
				//Route::get('/post/{id}','PostsController@postView');
			});

			Route::group(['prefix' => 'categories'],function(){
				Route::get('/{id?}','CategoriesController@categories');
				Route::post('/save','CategoriesController@save');
				Route::get('/delete/{id}','CategoriesController@delete');
			});
		});
	});

	Route::get('/', 'BlogController@index');
	Route::get('/{permalink}', 'BlogController@pageView');



});


/*
localhost/
localhost/hakkimda
localhost/calismalarim

localhost/blog/
localhost/blog/page/3
localhost/blog/category/tarifler
localhost/blog/blog-yazim

*
localhost/kanepe/
localhost/kanepe/posts/
localhost/kanepe/posts/create/
localhost/kanepe/posts/post/id/
*
localhost/kanepe/categories/
localhost/kanepe/categories/create/
localhost/kanepe/categories/category/id/
*
localhost/kanepe/
localhost/kanepe/pages/
localhost/kanepe/pages/create/
localhost/kanepe/pages/page/id/
*/
