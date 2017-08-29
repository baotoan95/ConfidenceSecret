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

Route::get('schema/create-drop', function() {
    Scheme::table('users', function($table) {
        $table->increment('id');
        $table->unique('mail');
        $table->string('password');
        $table->string('fist_name');
        $table->string('last_name');
        $table->string('facebook_token');
        $table->string('google_token');
        $table->enum('grender', ['male', 'female', 'other']);
        $table->timestamps('birth_day');
        $table->string('hash_key');
        $table->string('bio');
        $table->string('phone_number');
        $table->string('avatar_url');
    });

    Schema::table('content_types', function($table) {
        $table->increment('id');
        $table->string('name');
    });

    Schema::table('catogries', function($table) {
        $table->increment('id');
        $table->string('name');
    });

    Schema::table('posts', function($table) {
        $table->increment('id');
        $table->string('title', 200);
        $table->string('content');
        $table->timestamps('created');
        $table->timestamps('updated');
        $table->integer('like_count');
        $table->integer('view_count');
        $table->foreign('author')->references('id')->on('users');
        $table->foreign('content_type')->references('id')->on('content_types');
        $table->foreign('category')->references('id')->on('categories');
    });

    Schema::table('comments', function($table) {
        $table->increment('id');
        $table->timestamps('created');
        $table->timestamps('updated');
        $table->string('content');
        $table->foreign('owner')->references('id')->on('users');
        $table->integer('parent');
    });

    Schema::table('contacts', function($table) {
        $table->increment('id');
        $table->timestamps('created');
        $table->string('content');
        $table->string('mail');
        $table->string('name');
        $table->string('phone_number');
    });

    Schema::table('notifications', function($table) {
        $table->increment('id');
        $table->string('subject');
        $table->string('content');
        $table->timestamps('created');
        $table->string('create_by');
    });
});