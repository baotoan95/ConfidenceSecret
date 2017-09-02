<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {
    use Uuids;

    protected $table = "posts";
    protected $fillable = ['id', 'title', 'content', 'like_count', 
    'view_count', 'author', 'content_type', 'category'];
    protected $hidden = [];
    public $timestamps = true;

    public function author() {
        return $this->belongsTo('App\User', 'author');
    }

    public function contentType() {
        return $this->belongsTo('App\ContentType', 'content_type');
    }

    public function category() {
        return $this->belongsTo('App\Category', 'category');
    }

}
