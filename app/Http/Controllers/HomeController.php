<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Subcategory;
use App\Carousel;
use App\Category;
use App\Post;
use App\Product;
use App\Tag;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::count();
        $categorias = Category::count();
        $subcategorias = Subcategory::count();
        $tags = Tag::count();
        $posts = Post::count();
        $products = Product::count();
        $carousel = Carousel::get()->count();

        $data           = [
            'users'=> $users,
            'categorias'=> $categorias,
            'subcategorias'=> $subcategorias,
            'tags'=> $tags,
            'posts'=> $posts,
            'products'=> $products,
            'carousel'=> $carousel
           ];
        return view('admin.dashboard', $data);
    }
}
