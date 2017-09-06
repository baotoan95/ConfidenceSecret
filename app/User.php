<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable {
    use Uuids;

    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'email', 'password', 'first_name', 'last_name',
    'facebook_token', 'google_token', 'grender', 'birth_day', 'hash_key', 'bio', 
    'phone_number', 'avatar_url', 'locked', 'actived'];
    protected $hidden = [];
    public $incrementing = false;
    public $timestamps = true;

    public function posts() {
        return $this->hasMany('App\Post', 'author');
    }
}
