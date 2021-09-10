<?php

namespace App\Http\Controllers;

use App\Branchoffice;
use App\Table;
use App\UserCheckin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserCheckinController extends Controller
{
    public function __Construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function GetCheckin()
    {
        $tables = Table::orderBy('name','ASC')->pluck('name','id');
        $data = [
            'tables' => $tables
        ];
        return view('web.checkin', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function PostCheckin(Request $request)
    {
        $rules = [
            'code'                              => 'required',

        ];

        $messages = [
            'code.required'                     => 'Se requiere ingresar el codigo de sucursal.',

        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()):

            return back()->withErrors($validator)->with('message','Se ha producido un error')->with('typealert','danger');

        else:

            $bo = Branchoffice::where('code', $request->code)->first();

            if($bo != null):
                $c = new UserCheckin;
                $c ->user_id                        = Auth::user()->id;
                $c ->branchoffice_id                = $bo->id;
                $c ->table_id                       = $request->input('table');
                $c ->folio                          = rand(1,999999);

                if($c->save()):
                    return redirect()->route('web.index');
                endif;
            else:
                return back()->withErrors($validator)->with('message','El codigo es incorrecto')->with('typealert','danger');
            endif;

        endif;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UserCheckin  $userCheckin
     * @return \Illuminate\Http\Response
     */
    public function show(UserCheckin $userCheckin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserCheckin  $userCheckin
     * @return \Illuminate\Http\Response
     */
    public function edit(UserCheckin $userCheckin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserCheckin  $userCheckin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserCheckin $userCheckin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserCheckin  $userCheckin
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserCheckin $userCheckin)
    {
        //
    }
}
