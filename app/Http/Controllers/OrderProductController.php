<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Models\OrderProduct;

class OrderProductController extends Controller
{
    public function orderRecord(){
        if (Auth::check()) {
            $userID    = Auth::user()->id;
            //$products = Order::orderBy('id','asc')->take(3)->get();
            $orderProducts=OrderProduct::select('pay_types.*','products.*','orders.*','order_products.*')
            ->join('orders', 'orders.id', '=', 'order_products.order_id')
            ->join('products', 'products.id', '=', 'order_products.product_id')
            ->join('pay_types', 'pay_types.id', '=', 'orders.pay_type_id')
            ->where('orders.user_id', $userID)
            ->orderBy('orders.created_at','desc')
            ->get();
            //dd($order_products);
            return view('order_record',compact('orderProducts'));
        }else{
            return redirect('/login');
        }
    }
}
