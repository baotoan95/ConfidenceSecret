<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->uuid('id');
            $table->primary('id');
            $table->string('title')->unique();
            $table->string('content');
            $table->integer('like_count');
            $table->integer('view_count');
            $table->uuid('author');
            $table->uuid('content_type');
            $table->uuid('category');
            $table->foreign('author')->references('id')->on('users');
            $table->foreign('content_type')->references('id')->on('content_types');
            $table->foreign('category')->references('id')->on('categories');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
