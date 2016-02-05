<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

	Route::get('/', function () {
		$posts = App\Post::where('active','1')->orderBy('created_at','desc')->paginate(6);
	    return view('frontend.front.index', compact('posts'));
	});

	Route::get('category', 'CategoryController@index');
	//login and register with github
	Route::get('auth/github', 'Auth\AuthController@redirectToProvider');
	Route::get('auth/github/callback', 'Auth\AuthController@handleProviderCallback');

	//login and register with facebook

	Route::get('auth/facebook', 'Auth\AuthController@redirectProvider');
	Route::get('auth/facebook/callback', 'Auth\AuthController@ProviderCallback');
	//login and register google
	Route::get('auth/google', 'Auth\AuthController@redirectGoogleProvider');
	Route::get('auth/google/callback', 'Auth\AuthController@ProviderGoogleCallback');

	// login with aplikasi
	Route::get('login', 'Auth\AuthController@getLogin');
	Route::post('login', 'Auth\AuthController@postLogin');
	Route::get('logout', 'Auth\AuthController@getLogout');

	// registrasi aplikasi
	Route::get('register', 'Auth\AuthController@getRegister');
	Route::post('register', 'Auth\AuthController@postRegister');

	Route::get('password/email', 'Auth\PasswordController@getEmail');
	Route::post('password/email', 'Auth\PasswordController@postEmail');

	// Password reset routes...
	Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
	Route::post('password/reset', 'Auth\PasswordController@postReset');


	Route::group(['middleware' => ['auth']], function()
	{
	// show new post form
	Route::get('post/baru','PostController@create');
	
	// save new post
	Route::post('post','PostController@store');
	
	// edit post form
	Route::get('edit/{slug}','PostController@edit');
	
	// update post
	Route::post('update','PostController@update');
	
	// delete post
	Route::get('delete/{id}','PostController@destroy');
	
	// display user's all posts
	Route::get('post/user/all','UserController@post_all');
	
	// display user's drafts
	Route::get('my-drafts','UserController@user_posts_draft');
	
	});

	Route::get('search','PostController@search');
	Route::get('post/{slug}',['as' => 'post', 'uses' => 'PostController@show'])->where('slug', '[A-Za-z0-9-_]+');

	Route::get('video', function(){
		$post = DB::table('category')->get();

		return response()->json($post);
		//return view('frontend.video.index',compact('post'));
	});

Route::get('test', function () {
    event(new App\Events\MyEvent());
    return "event";
});
