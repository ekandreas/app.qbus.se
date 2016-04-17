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

Route::get('/', ['as'=>'dashboard', function () {
	if( !isset($_COOKIE["qbus_demo"]) ) {
		return redirect('https://www.qbus.se/');
	}
	else {
	    return view('pages.dashboard');
	}
}]);

Route::get('/demo', function () {
	setcookie('qbus_demo', 'demo', time()+60*60*24);
	return redirect('/');
});

Route::get('/work-new', ['as'=>'work-new', function () {
    return view('pages.new-work');
}]);


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
    //
});
