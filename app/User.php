<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model {
    use Uuids;

    protected $table = 'users';
    protected $fillable = ['id', 'email', 'password', 'first_name', 'last_name',
    'facebook_token', 'google_token', 'grender', 'birth_day', 'hash_key', 'bio', 
    'phone_number', 'avatar_url', 'locked', 'actived'];
    protected $hidden = [];
    public $timestamps = true;

    public function posts() {
        return $this->hasMany('App\Post', 'author');
    }
}
