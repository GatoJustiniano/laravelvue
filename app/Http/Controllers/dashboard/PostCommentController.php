<?php

namespace App\Http\Controllers\dashboard;

use App\Models\Post;

use App\Models\PostComment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class PostCommentController extends Controller
{   

    public function index()
    {
        $postComments = PostComment::orderBy('created_at','desc')->paginate(10);
        return view('dashboard/post-comment/index',['postComments' => $postComments]);

    }

    public function post(Post $post)
    {
        $posts = Post::all();

        $postComments = PostComment::orderBy('created_at','desc')
                                    ->where('post_id','=',$post->id)->paginate(10);
        return view('dashboard/post-comment/post',['postComments' => $postComments,
                                                    'posts' => $posts, 
                                                    'post' => $post]);

    }
    
    public function show(PostComment $postComment)
    {
        //$postComment = PostComment::findOrFail($id);
        return view('dashboard/post-comment/show',['postComment' => $postComment]);

    }
    public function jshow(PostComment $postComment)
    {
        return response()->json($postComment);

    }

    public function proccess(PostComment $postComment)
    {
        if($postComment->approved == '1' ){
            $postComment->approved = '0';
        }else {
            $postComment->approved = '1';
        }

        $postComment->save();
        return response()->json($postComment->approved);

    }
    
    public function destroy(PostComment $postComment)
    {
        $postComment->delete();
        return redirect()->back()->with('status','Comentario eliminado con éxito');
    }
}
