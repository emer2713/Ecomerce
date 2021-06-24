<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Config, Str;
use Intervention\Image\Facades\Image As Image;
use App\Subcategory;
use App\Category;
use App\Post;
class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $posts = Post::orderby('id','DESC')->paginate(15);

        $data = [
            'posts' => $posts
        ];

        return view('admin.posts.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::where('module', 1)->orderBy('name','ASC')->pluck('name','id');

        $data = [
            'categories' => $categories
        ];
        return view('admin.posts.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|unique:posts|max:60',
            'user_id'=>'required|integer',
            'category_id'=>'required|integer',
            'abstract'=>'required|max:500',
            'body'=>'required',
            'status'=>'required',
            'file' => 'required',
            'file.image' => 'El archivo no es una imagen.'

        ]);

        $path = '/Post';
        $fileExt = trim($request->file('file')->getClientOriginalExtension());
        $upload_path = Config::get('filesystems.disks.uploads.root');
        $name = Str::slug(str_replace($fileExt, '', $request->file('file')->getClientOriginalName()));
        $filename = rand(1,999).'-'.$name.'.'.$fileExt;
        $file_absolute = $upload_path.'/'.$path.'/'.$filename;

        $post = new Post;
        $post->name = e($request->name);
        $post->user_id = e($request->user_id);
        $post->category_id = e($request->category_id);
        $post->slug = Str::slug($request->name);
        $post->abstract = e($request->abstract);
        $post->body = e($request->body);
        $post->status = e($request->status);
        $post ->file_path     = $path;
        $post ->file     = $filename;
        $post->save();



        if($post->save()):

            if($request->hasFile('file')):
                $fl = $request->file->storeAs($path, $filename, 'uploads');
                $imagT = Image::make($file_absolute);
                $imagT->resize(256, 256, function($constraint){
                    $constraint->upsize();
                });
                $imagW = Image::make($file_absolute);
                $imagW->resize(1366, 768, function($constraint){
                    $constraint->upsize();
                });
                $imagT->save($upload_path.'/'.$path.'/t_'.$filename);
                $imagW->save($upload_path.'/'.$path.'/'.$filename);
            endif;

            return redirect()->route('posts.index')->with('info','Agregado correctamente');
        endif;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::where('id', $id)->with('category','user','image','comments','comments.user')->firstOrFail();
        $categories = Category::orderBy('name','ASC')->pluck('name','id');
        $data = [
            'post' => $post,
            'categories' => $categories
        ];

        return view('admin.posts.show',$data);
    }
    public function category_id($category_id)
    {
        $posts = Post::where('category_id', $category_id)->orderby('id','DESC')->paginate();

        $data = [
            'posts' => $posts
        ];

        return view('admin.posts.index',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::where('id', $id)->firstOrFail();
        $categories = Category::orderBy('name','ASC')->pluck('name','id');

        $data = [
            'post' => $post,
            'categories' => $categories
        ];

        return view('admin.posts.edit',$data);



    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required|max:20',

            'category_id'=>'required|integer',
            'abstract'=>'required|max:500',
            'body'=>'required',
            'status'=>'required',
         ]);

         $path = '/Post';
         $fileExt = trim($request->file('file')->getClientOriginalExtension());
         $upload_path = Config::get('filesystems.disks.uploads.root');
         $name = Str::slug(str_replace($fileExt, '', $request->file('file')->getClientOriginalName()));
         $filename = rand(1,999).'-'.$name.'.'.$fileExt;
         $file_absolute = $upload_path.'/'.$path.'/'.$filename;

         $post = Post::where('id', $id)->firstOrFail();
         $post->name = e($request->name);
         $post->user_id = e($request->user_id);
         $post->category_id = e($request->category_id);
         $post->slug = Str::slug($request->name);
         $post->abstract = e($request->abstract);
         $post->body = e($request->body);
         $post->status = e($request->status);
         $post ->file_path     = $path;
         $post ->file     = $filename;
         $post->save();



         if($post->save()):

             if($request->hasFile('file')):
                 $fl = $request->file->storeAs($path, $filename, 'uploads');
                 $imagT = Image::make($file_absolute);
                 $imagT->resize(256, 256, function($constraint){
                     $constraint->upsize();
                 });
                 $imagW = Image::make($file_absolute);
                 $imagW->resize(1366, 768, function($constraint){
                     $constraint->upsize();
                 });
                 $imagT->save($upload_path.'/'.$path.'/t_'.$filename);
                 $imagW->save($upload_path.'/'.$path.'/'.$filename);
             endif;

             return redirect()->route('posts.index')->with('info','Actualizado correctamente');
         endif;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::where('id', $id)->firstOrFail()->delete();
        return redirect()->route('posts.index')->with('info','Borrado correctamente');

    }
}
