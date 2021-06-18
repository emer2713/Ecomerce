<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::orderby('id','DESC')->paginate(15);

        $data = [
            'categories' => $categories
        ];

        return view('admin.categories.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
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
            'name'=>'required|unique:categories|max:20',
            'module'=>'required|max:20' 
        ]);
        $category = new Category;
        $category->name = e($request->name);
        $category->module = e($request->module);
        $category->slug = Str::slug($request->name);
        $category->save();

        return redirect()->route('categories.index')->with('info','Agregado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }
    public function module($module)
    {
        $categories = Category::where('module', $module)->orderby('id','DESC')->paginate();

        $data = [
            'categories' => $categories
        ];

        return view('admin.categories.index',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::where('id', $id)->firstOrFail();

        $data = [
            'category' => $category
        ];

        return view('admin.categories.edit',$data);

        

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required|max:20',
            'module'=>'required|max:20' 
        ]);
        $category = Category::where('id', $id)->firstOrFail();
        $category->name = e($request->name);
        $category->module = e($request->module);
        $category->slug = Str::slug($request->name);
        $category->save();

        return redirect()->route('categories.index')->with('info','Agregado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::where('id', $id)->firstOrFail()->delete();
        return redirect()->route('categories.index')->with('info','Borrado correctamente');
  
    }
}
