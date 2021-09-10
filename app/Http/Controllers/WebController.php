<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\Post;
use App\Carousel;
use App\ProductView;
use App\Tag;
use App\Social;
use App\Subcategory;
use App\User;
use App\UserProduct;
use Illuminate\Support\Facades\Auth;

class WebController extends Controller
{
    public function index()
    {
        //$category = Category::where('front','YES')->with('subcategories')->firstOrFail();
        $category = Category::with('subcategories')->get();




        $productsFeatured =Product::where('status','PUBLISHED')->where('state',4)->with('images')->get()->take(6);

        $productsNew =Product::where('status','PUBLISHED')->orderBy('id','DESC')->with('images')->get()->take(6);
        $latestBlogs =Post::where('status','PUBLISHED')->orderBy('id','DESC')->get()->take(5);

        $hotDeals =Product::where('status','PUBLISHED')->orderBy('previousPrice','DESC')->with('images')->get()->take(3);

        //$specialOffers=Product::where('status','PUBLISHED')->where('state',5)->with('images')->get()->take(9);

        //$specialDeals=Product::where('status','PUBLISHED')->where('state',6)->with('images')->get()->take(9);

        $tags=Tag::get();

        $carousels=Carousel::orderBy('id','DESC')->get();
        //$socials=Social::orderBy('id','DESC')->get();

       // return view('web.index', compact('socials','carousels','tags','specialDeals','specialOffers','hotDeals','latestBlogs','category','productsCategory','productsFeatured','productsNew'));
       $data = [
           'category' => $category,

           'productsFeatured' => $productsFeatured,
           'productsNew' => $productsNew,
           'latestBlogs' => $latestBlogs,
           'hotDeals' => $hotDeals,
           'tags' => $tags,
           'carousels' => $carousels
       ];

       //dd($latestBlogs);
       return view('web.index', $data);

    }
    public function notFound()
    {
        return view('web.404');
    }
    public function blogDetails()
    {
        return view('web.blog-details');
    }
    public function blog()
    {
        return view('web.blog');
    }
    public function category($slug)
    {
        $tags = Tag::get();
        $subcategory = Subcategory::where('slug', $slug)->firstOrFail();
        $products = Product::where('subcategory_id', $subcategory->id)->get();

        $data = [
            'products' => $products,
            'subcategory'=> $subcategory,
            'tags' => $tags

        ];
        return view('web.category', $data);
    }

    public function tags($slug)
    {
        $tags = Tag::get();
        $subcategory = Subcategory::where('slug', $slug)->firstOrFail();
        $products = Product::where('subcategory_id', $subcategory->id)->get();

        $data = [
            'products' => $products,
            'tags'=> $tags

        ];
        return view('web.category', $data);
    }
    public function checkout()
    {
        return view('web.checkout');
    }
    public function contact()
    {
        return view('web.contact');
    }
    public function getDetail($slug)
    {
        $product = Product::where('slug' ,$slug)->first();
        $pvsfind = ProductView::where('product_id', $product->id)->first();


        if (Auth::check()) {

            if ($pvsfind == null) {
                $pvs = new UserProduct;
                $pvs->product_id = $product->id;
                $pvs->quantity = '1';
                $pvs->month = date('Y-m');
                $pvs->user_id =  Auth::user()->id;

                $pvs->save();
            } else if ($pvsfind != null){

                $pvs = UserProduct::where('product_id', $product->id)->first();
                $pvs->product_id = $product->id;
                $pvs->quantity = $pvs->quantity + 1;
                $pvs->month = date('Y-m');
                $pvs->user_id = Auth::user()->id;

                $pvs->save();
            }

        }
        if ($pvsfind == null) {
            $pvs = new ProductView;
            $pvs->product_id = $product->id;
            $pvs->month = date('Y-m');
            $pvs->quantity = '1';
            $pvs->save();
        } else if ($pvsfind != null){

            $pvs = ProductView::where('product_id', $product->id)->first();
            $pvs->product_id = $product->id;
            $pvs->month = date('Y-m');
            $pvs->quantity = $pvs->quantity + 1;
            $pvs->save();
        }


        $tags = Tag::get();
        $product = Product::where('slug', $slug)->firstOrFail();
        $hotDeals =Product::where('status','PUBLISHED')->orderBy('previousPrice','DESC')->with('images')->get()->take(3);
        $data = [
            'product' => $product,
            'tags'=> $tags,
            'hotDeals' => $hotDeals

        ];
        return view('web.product.detail', $data);
    }
    public function faq()
    {
        return view('web.faq');
    }
    public function myWishlist()
    {
        return view('web.my-wishlist');
    }
    public function productComparison()
    {
        return view('web.product-comparison');
    }
    public function shoppingCart()
    {
        return view('web.shopping-cart');
    }
    public function signIn()
    {
        return view('web.sign-in');
    }
    public function termsConditions()
    {
        return view('web.terms-conditions');
    }
    public function trackOrders()
    {
        return view('web.track-orders');
    }

}
