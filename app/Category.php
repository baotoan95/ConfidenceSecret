<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {
    use Uuids;

    protected $table = 'categories';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'name'];
    protected $hidden = [];
    protected $incrementing = false;
    public $timestamps = false;
}
