<?php

namespace App\Http\Controllers;

use App\Branchoffice;
use App\Table;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TableController extends Controller
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
        $tables = Table::orderBy('id','DESC')->paginate(15);
        return view('admin.tables.index', compact('tables'));
    }

    public function create()
    {
        $subareas = DB::table('branchoffices')->select(DB::raw('name, id'));
        $bo = array() + $subareas->pluck('name', 'id')->toArray();
        $data = ['bo' => $bo];
        return view('admin.tables.create', $data);
    }
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',

            'branchoffice_id'=>'required',
        ]);

        $table = new Table;
        $table->name = e($request->name);
        $table->branchoffice_id = $request->branchoffice_id;

        $table->save();

        return redirect()->route('tables')->with('info','Agregado correctamente');
    }
    public function show($id)
    {
        $table = Table::where('id',$id)->with('image')->firstOrFail();
        return view('admin.tables.show',compact('table'));
    }
    public function edit($id)
    {
        $table = Table::where('id',$id)->firstOrFail();
        return view('admin.tables.edit',compact('table'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required',

        ]);

        $table = Table::findOrFail($id);
        $table->name = e($request->name);
        $table->branchoffice_id = $request->branchoffice_id;

        return redirect()->route('tables')->with('info','Actualizado correctamente');
    }
    public function destroy($id)
    {
        $table = Table::findOrFail($id)->delete();
        return back()->with('info','Borrado con éxito');
    }
}
