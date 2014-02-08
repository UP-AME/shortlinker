<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return '';
});

Route::get('admin', function()
{
	return View::make('home');
});


Route::get('{shortlink}', function($shortlink = shortlink)
{
	$link = Links::where('shortlink', $shortlink)->where('active', true)->first();
	if ($link == null)
		return '';
	else
		return Response::make( '', 302 )->header('Location', $link->url);
})->where('shortlink', '[^/]+');

Route::get('admin/add', function() {
	return View::make('form');
});

Route::post('admin/add', function() {
	$shortlink = strtolower(Input::get('shortlink'));
	$url = Input::get('url');

	if (preg_match('/^[A-Za-z0-9]+$/', $shortlink) == 0) {
		return View::make('form')->with('html_flash_warning', 'The shortlink "' . $shortlink . '" is invalid.');
	} else if (Links::where('shortlink', $shortlink)->exists()) {
		return View::make('form')->with('html_flash_warning', 'The shortlink "' . $shortlink . '" already exists.');
	} else {
		if (preg_match('/^http:\/\/.*|^https:\/\//', $url) == 0) {
			$url = 'http://' . $url;
		}

		$link = new Links;
		$link->shortlink = $shortlink;
		$link->url = $url;
		$link->active = true;
		$link->save();
		return View::make('form')->with('html_flash_success', 'You have successfully linked http://link.up-ame.org/' . $shortlink . ' to ' . $url . '.');
	}
});

Route::get('admin/view', function() {
	$links = Links::all();
	return View::make('links')->with('links', $links);
});

Route::post('admin/view', function() {
	$id = Input::get('id');
	$link = Links::find($id);
	if ($link->active)
		$link->active = false;
	else
		$link->active = true;
	$link->save();

	$links = Links::all();
	return View::make('links')->with('links', $links);

});
