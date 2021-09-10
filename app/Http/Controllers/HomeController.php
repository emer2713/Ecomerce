<?php

namespace App\Http\Controllers;

use App\AllPurchasedProduct;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Subcategory;
use App\Carousel;
use App\Category;
use App\OrderAllProduct;
use App\OrderProduct;
use App\Post;
use App\Product;
use App\ProductView;
use App\Tag;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __Construct()
    {
        $this->middleware('auth');
        $this->middleware('user.status');
        $this->middleware('user.permissions');
        $this->middleware('isadmin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $m = date('Y-m');
        $users = User::count();
        $categorias = Category::count();
        $subcategorias = Subcategory::count();
        $tags = Tag::count();
        $posts = Post::count();
        $products = Product::count();
        $carousel = Carousel::get()->count();
        $pva = ProductView::orderBy('quantity', 'DESC')->paginate(10);
        $pvm = ProductView::orderBy('quantity', 'DESC')->where('month', $m)->paginate(10);
        $proall = Product::select('name','id','sku','slug')->get();
        $pca = AllPurchasedProduct::orderBy('quantity', 'DESC')->paginate(10);
        $pcm = OrderAllProduct::orderBy('quantity', 'DESC')->where('month', $m)->paginate(10);
        $data           = [
            'users'=> $users,
            'categorias'=> $categorias,
            'subcategorias'=> $subcategorias,
            'tags'=> $tags,
            'posts'=> $posts,
            'products'=> $products,
            'carousel'=> $carousel,
            'pva'=> $pva,
            'pvm'=> $pvm,
            'pca'=> $pca,
            'pcm'=> $pcm,
            'proall'=> $proall
           ];
        return view('admin.dashboard', $data);
    }

    public function bar()
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
        return view('admin.employee.bar', $data);
    }

    public function kitchen()
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
           return view('admin.employee.kitchen', $data);
    }

    public function waiter()
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
           return view('admin.employee.waiter', $data);
    }

    public function boxe()
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
            'carousel'=> $carousel,

           ];
           return view('admin.employee.boxe', $data);
    }

}
