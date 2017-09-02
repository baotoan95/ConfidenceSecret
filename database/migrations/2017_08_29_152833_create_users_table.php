<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->uuid('id');
            $table->primary('id');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('fist_name');
            $table->string('last_name');
            $table->string('facebook_token');
            $table->string('google_token');
            $table->enum('grender', ['male', 'female', 'other']);
            $table->timestamp('birth_day');
            $table->string('hash_key');
            $table->string('bio');
            $table->string('phone_number');
            $table->string('avatar_url');
            $table->string('locked');
            $table->string('actived');
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
        Schema::dropIfExists('users');
    }
}
