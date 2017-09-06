<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Machine
 *
 * @package App
 *
 * @SWG\Definition(
 *   definition="Machine",
 *   required={"name"}
 * )
 *
 */
class Post extends Model {
    use Uuids;

    /**
     * @SWG\Property(format="string")
     * @var string
     */
    protected $table = "posts";
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'title', 'content', 'like_count', 
    'view_count', 'author', 'content_type', 'category'];
    protected $hidden = [];
    public $incrementing = false;
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
