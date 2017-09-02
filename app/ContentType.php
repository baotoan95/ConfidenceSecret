<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContentType extends Model {
    use Uuids;

    protected $table = 'content_types';
    protected $fillable = ['id', 'name'];
    protected $hidden = [];
    public $timestamps = true;
}
