<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Http\Requests\PostRequest;

class PostApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return Post::all()->tojSON();
    }

    public function store(PostRequest $request) {
        $post = new Post;
        $post->title = $request->title;
        $post->content = 'Hi';
        $post->like_count = 3;
        $post->view_count = 5;
        $post->author = '843606d0-8fee-11e7-8802-bc77373da5f4';
        $post->content_type = '9feb1c9b-8fee-11e7-8802-bc77373da5f4';
        $post->category = '89d95487-8fa9-11e7-aebb-bc77373da5f4';

        if(!$post->save()) {
            return response('Something is wrong', 400);
        }
        
        return response($post->id, 200);
    }

    public function show($id) {
        return Post::find($id)->tojSON();
    }

    public function delete($id) {
        return Post::destroy($id);
    }

    public function update(PostRequest $request) {
        $post = Post::find($request->id);
        $post->title = $request->title;
        $post->save();

        return response($post, 200);
    }
}
