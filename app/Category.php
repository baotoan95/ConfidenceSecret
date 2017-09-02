<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {
    use Uuids;

    protected $table = 'categories';
    protected $fillable = ['id', 'name'];
    protected $hidden = [];
    protected $increments = false;
    public $timestamps = false;
}
