<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\OrderUserProduct;
use App\Product;
use Illuminate\Http\Request;
use App\User;
use App\UserProduct;

class UserController extends Controller
{
    public function __Construct()
    {
        $this->middleware('auth');
        $this->middleware('user.status');
        $this->middleware('user.permissions');
        $this->middleware('isadmin');
    }

    public function getUsers($status)
    {

        if($status == 'all'):

            $users = User::where('status', '1')->orderBy('id', 'Desc')->paginate(25);

        else :

            $users = User::where('status', $status)->orderBy('id', 'Desc')->paginate(25);

        endif;

        $data           = ['users' => $users];
        return view('admin.users.home', compact('users'));

    }

    public function getUserEdit($id)
    {
        $m = date('Y-m');
        $user           = User::findOrFail($id);
        $pvm = UserProduct::orderBy('quantity', 'ASC')->where('user_id', $id)->paginate(10);
        $pca = OrderUserProduct::orderBy('quantity', 'DESC')->where('user_id', $id)->paginate(10);

        $proall = Product::select('name','id','sku','slug')->get();

        $data = [
            'user' => $user,
            'pvm' => $pvm,
            'proall' => $proall
        ];
        return view('admin.users.users_edit', $data);

    }

    public function postUserEdit(Request $request, $id)
    {
        $user           = User::findOrFail($id);

        $user->role = $request->input('user_type');
        if($request->input('user_type') == "1"):
            if(is_null($user->permissions)):
                $permissions = [

                    'dashboard'                     => true,

                ];
                $permissions = json_encode($permissions);
                $user->permissions = $permissions;
            endif;
        else:
            $user->permissions = null;
        endif;

        if ($user->save()):

            if($request->input('user_type') == "1"):
                return redirect('/admin/user/'.$user->id.'/permissions')->with('message', 'El rango del usuario se actualizó con éxito.')->with('typealert', 'success');
            else:
                return back()->with('message', 'El rango del usuario se actualizó con éxito.')->with('typealert', 'danger');
            endif;

        endif;

    }

    public function getUserBanned($id)
    {
        $user    = User::findOrFail($id);
        if($user->status == "100"):

            $user->status = "1";
            $msg = "Usuario activado con éxito.";

        else :

            $user->status = "100";
            $msg = "Usuario suspendido con éxito.";

        endif;

        if($user->save()):

            return back()->with('message', $msg)->with('typealert', 'success');

        endif;

        $data           = ['user' => $user];
        return view('admin.users.users_edit', $data);

    }

    public function getUserPermissions($id)
    {
        $user    = User::findOrFail($id);

        $data           = ['user' => $user];
        return view('admin.users.users_permissions', $data);

    }


    //validations
    public function postUserPermissions(Request $request, $id)
    {
        $user    = User::findOrFail($id);

        $permissions = [

                    'dashboard'                     => $request->input('dashboard'),
                    'dashboard_small_stats'         => $request->input('dashboard_small_stats'),
                    'boxe'                     => $request->input('boxe'),
                    'waiter'                     => $request->input('waiter'),
                    'kitchen'                     => $request->input('kitchen'),
                    'bar'                     => $request->input('bar'),

                    'user_list'                     => $request->input('user_list'),
                    'users_edit'                    => $request->input('users_edit'),
                    'users_banned'                  => $request->input('users_banned'),
                    'users_permissions'             => $request->input('users_permissions'),

                    'quotes'                        => $request->input('quotes'),
                    'quotes_search'                 => $request->input('quotes_search'),
                    'quotes_download'               => $request->input('quotes_download'),
                    'quotes_finish'                 => $request->input('quotes_finish'),

                    'subcategories'            => $request->input('subcategories'),
                    'subcategories_add'        => $request->input('subcategories_add'),
                    'subcategories_edit'       => $request->input('subcategories_edit'),
                    'subcategories_delete'     => $request->input('subcategories_delete'),

                    'tags'                      => $request->input('tags'),
                    'tags_add'                  => $request->input('tags_add'),
                    'tags_edit'                 => $request->input('tags_edit'),
                    'tags_delete'               => $request->input('tags_delete'),

                    'products'                      => $request->input('products'),
                    'products_add'                  => $request->input('products_add'),
                    'products_edit'                 => $request->input('products_edit'),
                    'products_show'                 => $request->input('products_show'),
                    'products_delete'               => $request->input('products_delete'),


                    'posts'                          => $request->input('posts'),
                    'posts_add'                      => $request->input('posts_add'),
                    'posts_edit'                     => $request->input('posts_edit'),
                    'posts_show'                     => $request->input('posts_show'),
                    'posts_delete'                   => $request->input('posts_delete'),

                    'carousels'                     => $request->input('carousels'),
                    'carousels_add'                 => $request->input('carousels_add'),
                    'carousels_edit'                => $request->input('carousels_edit'),
                    'carousels_delete'              => $request->input('carousels_delete'),


                    'categories'                    => $request->input('categories'),
                    'categories_add'                => $request->input('categories_add'),
                    'categories_edit'               => $request->input('categories_edit'),
                    'categories_delete'             => $request->input('categories_delete'),

                    'tables'                     => $request->input('tables'),
                    'tables_add'                 => $request->input('tables_add'),
                    'tables_edit'                => $request->input('tables_edit'),
                    'tables_delete'              => $request->input('tables_delete'),

                    'branchoffices'                     => $request->input('branchoffices'),
                    'branchoffices_add'                 => $request->input('branchoffices_add'),
                    'branchoffices_edit'                => $request->input('branchoffices_edit'),
                    'branchoffices_delete'              => $request->input('branchoffices_delete'),

                    ];
        $permissions = json_encode($permissions);
        $user->permissions = $permissions;

        if ($user->save()):
            return back()->with('message', 'Los permisos de ususario fueron actualizados con exito')->with('typealert', 'success');
        endif;

    }


}
