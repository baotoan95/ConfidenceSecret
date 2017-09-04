<?php

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
    return view('welcome');
});

Route::get('admin', function() {
	return view('admin.index');
});

Route::get('admin/users', function() {
    return view('admin.pages.users');
});

Route::get('admin/user', function() {
    return view('admin.pages.user');
});

Route::get('admin/posts', function() {
    return view('admin.pages.posts');
});

Route::get('admin/post', function() {
    return view('admin.pages.post');
});

Route::get('admin/contacts', function() {
    return view('admin.pages.contacts');
});

Route::get('admin/comments', function() {
    return view('admin.pages.comments');
});

Route::get('admin/notifications', function() {
    return view('admin.pages.notifications');
});

Route::get('admin/notification', function() {
    return view('admin.pages.notification'); 
});

Route::group(['prefix'=>'hello'], function() {
    Route::get('/', 'HelloController@index');
    Route::get('/first', 'HelloController@first');
});

Route::get('/post', function() {
    $data = App\Post::find('b6afb666-8fee-11e7-8802-bc77373da5f4');
    echo '<pre>';
    print_r($data->toArray());
    echo '</pre>';
});

use Webpatser\Uuid\Uuid;

Route::get('/demo', function() {
    $post = new App\Post;
    $post->title = 'Hello Kds ds';
    $post->content = 'Hi';
    $post->like_count = 3;
    $post->view_count = 5;
    $post->author = '843606d0-8fee-11e7-8802-bc77373da5f4';
    $post->content_type = '9feb1c9b-8fee-11e7-8802-bc77373da5f4';
    $post->category = '89d95487-8fa9-11e7-aebb-bc77373da5f4';
    
    $post->save();

    echo $post->id;
});

Route::get('posts', 'PostApiController@index');
Route::post('posts', 'PostApiController@store');
Route::get('posts/{id}', 'PostApiController@show');
Route::delete('posts/{id}', 'PostApiController@delete');
Route::put('posts', 'PostApiController@update');
