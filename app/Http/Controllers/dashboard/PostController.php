<?php

namespace App\Http\Controllers\dashboard;

use App\Models\Post;
use App\Models\Category;
use App\Models\PostImage;
use App\Helpers\CustomUrl;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostPost;
use App\Http\Requests\UpdatePostPut;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','rol.admin']);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('created_at','desc')->paginate(2);
        return view('dashboard/post/index',['posts' => $posts]);

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::pluck('id','title');
        return view('dashboard/post/create',['post'=> new Post(), 'categories'=>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostPost $request)
    {

        if ($request->url_clean == "") {
            $urlClean = CustomUrl::urlTitle(CustomUrl::convertAccentedCharacters($request->title), '-' ,true);
        }else {
            $urlClean = $request->url_clean;
        }

        $requestData = $request->validated();        
        $requestData["url_clean"] = $urlClean;

        $validator = Validator::make($requestData, StorePostPost::myRules());


        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        Post::create($requestData);
        return back()->with('status', 'Post creado con éxito!') ;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //$post = Post::findOrFail($id);
        return view('dashboard/post/show',['post' => $post]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $categories = Category::pluck('id','title') ;
        return view('dashboard/post/edit',['post' => $post, 'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostPut $request, Post $post)
    {
        $post->update($request->validated());
        return back()->with('status','Post actualizado con éxito');
    }

    //método para subir una imagen a un Post
    public function image(Request $request, Post $post)
    {
        $request->validate([
            'image' => 'required|mimes:jpeg,bmp,png|max:10240'
        ]);

        $filename = time() . "." . $request->image->extension();

        $request->image->move(public_path('images_post'), $filename); 

        PostImage::create([
            'image'     => $filename,
            'post_id'   => $post->id
        ]);

        return back()->with('status', 'Imagen cargada con éxito! ');
    }

    //método para subir una imagen con ck Editor
    public function contentImage(Request $request)
    {
        $request->validate([
            'image' => 'required|mimes:jpeg,bmp,png|max:10240'
        ]);

        $filename = time() . "." . $request->image->extension();

        $request->image->move(public_path('images_post'), $filename); 

        return response()->json([ "default" => URL::to('/') . '/images_post/' . $filename ]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->back()->with('status','Eliminado con éxito');
    }

    
}
