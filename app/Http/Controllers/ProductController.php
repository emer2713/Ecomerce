<?php

namespace App\Http\Controllers;

use App\Product;
use App\Subcategory;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $products = Product::orderby('id','DESC')->paginate(15);

        $data = [
            'products' => $products
        ];

        return view('admin.products.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subcategories = Subcategory::orderBy('name','ASC')->pluck('name','id');

        $data = [
            'subcategories' => $subcategories
        ];
        return view('admin.products.create', $data);
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
            'user_id'=>'required',
            'subcategory_id'=>'required',
            'name'=>'required|unique:products|max:60',
            'slug'=>'required',
            'stock'=>'required',
            'quantity'=>'required',
            'actualPrice'=>'required',
            'previousPrice'=>'required',
            'discountRate'=>'required',
            'shortDescription'=>'required',
            'longDescription'=>'required',
            'state'=>'required',
            'status'=>'required',        
        ]);
        $file_absolute = [];
        if($request->hasFile('images')){
            $images = $request->file('images');
            foreach($images as $file){
                $path = '/Product';
                $fileExt = trim($request->file('file')->getClientOriginalExtension());
                $upload_path = Config::get('filesystems.disks.uploads.root');
                $name = Str::slug(str_replace($fileExt, '', $request->file('file')->getClientOriginalName()));
        
                $filename = rand(1,999).'-'.$name.'.'.$fileExt;
                $file_absolute[]['url'] = $upload_path.'/'.$path.'/'.$filename;
            }
            
        $product = new Product;
    
        $product->user_id = e($request->user_id);
        $product->subcategory_id = e($request->subcategory_id);
        $product->name = e($request->name);
        $product->slug = Str::slug($request->name);
        $product->stock = e($request->stock);
        $product->quantity = e($request->quantity);
        $product->actualPrice = e($request->actualPrice);
        $product->previousPrice = e($request->previousPrice);
        $product->discountRate = e($request->discountRate);
        $product->shortDescription = e($request->shortDescription);
        $product->longDescription = e($request->longDescription);
        $product->state = e($request->state);
        $product->status = e($request->status);

        $product->save();  
        $product->images()->create($file_absolute);

        return redirect()->route('products.index')->with('info','Agregado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::where('id', $id)->with('subcategory','user','image','comments','comments.user')->firstOrFail();
        $subcategories = Subcategory::orderBy('name','ASC')->pluck('name','id');
        $data = [
            'product' => $product,
            'subcategories' => $subcategories
        ];

        return view('admin.products.show',$data);
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::where('id', $id)->firstOrFail();
        $subcategories = Subcategory::orderBy('name','ASC')->pluck('name','id');

        $data = [
            'product' => $product,
            'subcategories' => $subcategories
        ];

        return view('admin.products.edit',$data);

        

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'user_id'=>'required',
            'subcategory_id'=>'required',
            'name'=>'required|unique:products|max:60',
            'slug'=>'required',
            'stock'=>'required',
            'quantity'=>'required',
            'actualPrice'=>'required',
            'previousPrice'=>'required',
            'discountRate'=>'required',
            'shortDescription'=>'required',
            'longDescription'=>'required',
            'state'=>'required',
            'status'=>'required',        
        ]);
       
        $file_absolute = [];
        if($request->hasFile('images')){
            $images = $request->file('images');
            foreach($images as $file){
                $path = '/Product';
                $fileExt = trim($request->file('file')->getClientOriginalExtension());
                $upload_path = Config::get('filesystems.disks.uploads.root');
                $name = Str::slug(str_replace($fileExt, '', $request->file('file')->getClientOriginalName()));
        
                $filename = rand(1,999).'-'.$name.'.'.$fileExt;
                $file_absolute[]['url'] = $upload_path.'/'.$path.'/'.$filename;
            }
            
    
            
        }
        $product = Product::where('id', $id)->first();
        $product->user_id = e($request->user_id);
        $product->subcategory_id = e($request->subcategory_id);
        $product->name = e($request->name);
        $product->slug = Str::slug($request->name);
        $product->stock = e($request->stock);
        $product->quantity = e($request->quantity);
        $product->actualPrice = e($request->actualPrice);
        $product->previousPrice = e($request->previousPrice);
        $product->discountRate = e($request->discountRate);
        $product->shortDescription = e($request->shortDescription);
        $product->longDescription = e($request->longDescription);
        $product->state = e($request->state);
        $product->status = e($request->status);

   
        $product->save();
        if ($request->hasFile('file')){
            $product->images()->create($file_absolute);
        }
       
        return redirect()->route('products.index')->with('info','Agregado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::where('id', $id)->firstOrFail()->delete();
        return redirect()->route('products.index')->with('info','Borrado correctamente');
  
    }
}
