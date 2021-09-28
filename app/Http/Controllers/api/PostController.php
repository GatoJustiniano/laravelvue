<?php

namespace App\Http\Controllers\api;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends ApiResponseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = Post::
        join('post_images','post_images.post_id','=','posts.id')->
        join('categories','categories.id','=','posts.category_id')->
        select('posts.*','categories.title as category','post_images.image')->
        orderBy('posts.created_at','desc')->paginate(2);
        return $this->successResponse($post);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $post->image;
        $post->category;
        return $this->successResponse($post);
    }

    public function category(Category $category)
    {
        $posts = Post::
        join('post_images','post_images.post_id','=','posts.id')->
        join('categories','categories.id','=','posts.category_id')->
        select('posts.*','categories.title as category','post_images.image')->
        orderBy('posts.created_at','desc')->
        where('categories.id',$category->id)->
        paginate(2);
        
        return $this->successResponse(["posts"=> $posts, "category"=> $category]);
        //return $this->successResponse(["posts"=> $category->post()->paginate(10), "category"=> $category]);
    }


    public function url_clean(String $url_clean)
    {
        $post = Post::where('url_clean', $url_clean)->firstOrFail();
        $post->category;
        return $this->successResponse($post);
    }


}
