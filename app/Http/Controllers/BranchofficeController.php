<?php

namespace App\Http\Controllers;

use App\Branchoffice;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BranchofficeController extends Controller
{
    public function __Construct()
    {
        $this->middleware('auth');
        $this->middleware('user.status');
        $this->middleware('user.permissions');
        $this->middleware('isadmin');
    }

    public function index()
    {
        $branchoffices = Branchoffice::orderBy('id','DESC')->paginate(15);
        return view('admin.branchoffices.index', compact('branchoffices'));
    }

    public function create()
    {
        return view('admin.branchoffices.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'image'=>'required|image|mimes:jpeg,jpg,png',
        ]);
        if($request->hasFile('image')){
            $image=$request->file('image');
            $nombre = time().$image->getClientOriginalName();
            $ruta = public_path().'/images';
            $image->move($ruta,$nombre);
            $urlimage['url']='/images/'.$nombre;
        }
        $branchoffice = new Branchoffice;
        $branchoffice->name = e($request->name);
        $branchoffice ->slug                       = Str::slug($request->input('name'));
        $branchoffice->direction = e($request->direction);
        $branchoffice->email = e($request->email);
        $branchoffice->phone = e($request->phone);
        $branchoffice->code = Str::random(10);

        $branchoffice->save();

        $branchoffice->image()->create($urlimage);
        return redirect()->route('branchoffices')->with('info','Agregado correctamente');
    }
    public function show($id)
    {
        $branchoffice = Branchoffice::where('id',$id)->with('image')->firstOrFail();
        return view('admin.branchoffices.show',compact('branchoffice'));
    }
    public function edit($id)
    {
        $branchoffice = Branchoffice::where('id',$id)->firstOrFail();
        return view('admin.branchoffices.edit',compact('branchoffice'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required',

        ]);
        if($request->hasFile('image')){
            $image=$request->file('image');
            $nombre = time().$image->getClientOriginalName();
            $ruta = public_path().'/images';
            $image->move($ruta,$nombre);
            $urlimage['url']='/images/'.$nombre;
        }
        $branchoffice = Branchoffice::findOrFail($id);
        $branchoffice->name = e($request->name);
        $branchoffice ->slug                       = Str::slug($request->input('name'));
        $branchoffice->direction = e($request->direction);
        $branchoffice->email = e($request->email);
        $branchoffice->phone = e($request->phone);
        $branchoffice->status = $request->status;
        if ($request->hasFile('image')){
            $branchoffice->image()->delete();
        }
        $branchoffice->save();
        if ($request->hasFile('image')){
            $branchoffice->image()->create($urlimage);
        }
        return redirect()->route('branchoffices')->with('info','Actualizado correctamente');
    }
    public function destroy($id)
    {
        $branchoffice = Branchoffice::findOrFail($id)->delete();
        return back()->with('info','Borrado con éxito');
    }
}

