<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Http\Controllers\ApiController;
use App\Http\Requests\PostRequest;

class PostApiController extends ApiController
{
     /**
     * List of posts.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/posts",
     *     description="Returns list of posts",
     *     operationId="api.posts.all",
     *     produces={"application/json"},
     *     tags={"posts"},
     *     @SWG\Response(
     *         response=200,
     *         description="Request successfully"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action",
     *     )
     * )
     */
    public function index() {
        return Post::all()->tojSON();
    }

    /**
     * Store a post.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Post(
     *     path="/posts",
     *     description="Store a post",
     *     operationId="api.posts.store",
     *     produces={"application/json"},
     *     tags={"posts"},
     *     @SWG\Parameter(
     *         name="Post object",
     *         in="Body of request",
     *         description="Post object that need to store",
     *         required=true,
     *         type="Json"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="Request successfully"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action",
     *     )
     * )
     */
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

    /**
     * View a post.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/posts/{id}",
     *     description="Return a post by id",
     *     operationId="api.posts.show",
     *     produces={"application/json"},
     *     tags={"posts"},
     *     @SWG\Parameter(
     *         name="id",
     *         in="parameter",
     *         description="Id of post",
     *         required=true,
     *         type="uuid"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="Request successfully"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action",
     *     )
     * )
     */
    public function show($id) {
        return Post::find($id)->tojSON();
    }

    /**
     * Delete a post.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Delete(
     *     path="/posts/{id}",
     *     description="Delete a post by id",
     *     operationId="api.posts.delete",
     *     produces={"application/json"},
     *     tags={"posts"},
     *     @SWG\Parameter(
     *         name="id",
     *         in="parameter",
     *         description="Id of post",
     *         required=true,
     *         type="uuid"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="Delete successfully"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action",
     *     )
     * )
     */
    public function delete($id) {
        return Post::destroy($id);
    }

    /**
     * Update a post.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Put(
     *     path="/posts",
     *     description="Update a post",
     *     operationId="api.posts.update",
     *     produces={"application/json"},
     *     tags={"posts"},
     *     @SWG\Parameter(
     *         name="Post object",
     *         in="Body of request",
     *         description="Post object that need to update (including id)",
     *         required=true,
     *         type="Json"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="Update successfully"
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action",
     *     )
     * )
     */
    public function update(PostRequest $request) {
        $post = Post::find($request->id);
        $post->title = $request->title;
        $post->save();

        return response($post, 200);
    }
}
