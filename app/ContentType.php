<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContentType extends Model {
    use Uuids;

    protected $table = 'content_types';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'name'];
    protected $hidden = [];
    protected $incrementing = false;
    public $timestamps = false;
}
