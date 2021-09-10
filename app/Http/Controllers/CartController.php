<?php

namespace App\Http\Controllers;

use App\AllPurchasedProduct;
use App\Cart;
use App\OrderAllProduct;
use App\OrderProduct;
use App\Product;
use App\UserCheckin;
use App\UserPurchasedProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CartController extends Controller
{
    public function __Construct()
    {
        $this->middleware('auth');
    }
    public function GetPurchasedProduct()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function PostPurchasedProduct(Request $request)
    {
        $p = Product::where('sku', $request->sku)->first();
        $cin = UserCheckin::where('status', "1")->where('user_id', Auth::user()->id)->first();
        $month                         = date('Y-m');

        $c = new OrderProduct;
        $c ->user_id                        = Auth::user()->id;
        $c ->checkin_id                     = $cin->id;
        $c ->product_id                     = $p->id;
        $c ->quantity                       = $request->input('quantity_'.$p->sku);
        $c->month                           = date('Y-m');

        $app = AllPurchasedProduct::where('product_id', $p->id)->first();

        if ($app == null) {

            $pall = new AllPurchasedProduct();
            $pall ->product_id                     = $p->id;
            $pall ->quantity                       = $request->input('quantity_'.$p->sku);
            $pall->save();

        } else {

            $app ->product_id                     = $p->id;
            $app ->quantity                       = $app ->quantity + $request->input('quantity_'.$p->sku);
            $app->save();

        }

        $ppsfind = OrderAllProduct::where('product_id', $p->id)->first();

        if ($ppsfind == null) {

            $ppall = new OrderAllProduct();
            $ppall ->product_id                     = $p->id;
            $ppall ->quantity                       = $request->input('quantity_'.$p->sku);
            $ppall->month                           = date('Y-m');

            if($ppall->save()):
                return back();
            endif;

        } else {

            if ($ppsfind->month != $month) {

                $ppll = new OrderAllProduct();
                $ppll ->product_id                     = $p->id;
                $ppll ->quantity                       = $request->input('quantity_'.$p->sku);
                $ppll->month                           = date('Y-m');
                $ppll->save();

            } else {

                $ppsfind ->product_id                     = $p->id;
                $ppsfind ->quantity                       = $ppsfind ->quantity + $request->input('quantity_'.$p->sku);
                $ppsfind->month                           = date('Y-m');
                $ppsfind->save();
            }
        }

        $pvsfind = UserPurchasedProduct::where('product_id', $p->id)->first();

        if ($pvsfind == null) {

            $upp = new UserPurchasedProduct;
            $upp ->user_id                        = Auth::user()->id;
            $upp ->product_id                     = $p->id;
            $upp ->quantity                       = $request->input('quantity_'.$p->sku);
            $upp->month                           = date('Y-m');
            $upp->save();

        } else {

            $pvsfind ->user_id                        = Auth::user()->id;
            $pvsfind ->product_id                     = $p->id;
            $pvsfind ->quantity                       = $pvsfind ->quantity + $request->input('quantity_'.$p->sku);
            $pvsfind->month                           = date('Y-m');
            $pvsfind->save();

        }

        if($c->save()):
            return back();
        endif;


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function GetEditPurchasedProduct(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function PostEditPurchasedProduct(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function GetDeletePurchasedProduct(Cart $cart)
    {
        //
    }
}
