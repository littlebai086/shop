<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\PayType;
use App\Models\Product;
use App\Models\Order;
use App\Models\OrderProduct;

class ShopController extends Controller
{
    //

    public function shop()
    {
        //$data = ['item_name' => "Laravel5.8從入門到實戰" , 'price' => 2400];

        //return view('shop')->with($data); //用with()傳遞參數包

        //return view('shop',$data); //用view()的第二參數傳遞參數包


        $products = Product::orderBy('id','asc')->take(3)->get();

        // $items = \App\Item::where('enabled',true)->orderBy('created_at','asc')->limit(4)->get();
        // $sliders = \App\Element::where('page','shop')->where('position','slider')->basic()->get();
        // if(Auth::check()){
        //     $cartContent = \Cart::session(Auth()->user()->id)->getContent();
        //     $cartQty= \Cart::session(Auth()->user()->id)->getTotalQuantity();
        // }else{
        //     $cartContent =[];
        //     $cartQty= 0;
        // }

        //compact()能夠幫你把變數打包成一個陣列，變數名稱作為鍵
        return view('home', compact('products')); //用view()的第二參數搭配compact()傳遞參數包
        //return view('shop'); //沒傳變數的版本，現在會報錯
    }

    public function index()
    {
        $products = Product::orderBy('id','asc')->take(3)->get();
        // if(Auth::check()){
        //     $cartContent = \Cart::session(Auth()->user()->id)->getContent();
        //     $cartQty= \Cart::session(Auth()->user()->id)->getTotalQuantity();
        // }else{
        //     $cartContent =[];
        //     $cartQty= 0;
        // }
        return view('home', compact('products')); 
    }

    public function addCart(Request $request){
        $request->validate([
            'id' => 'required|string',
            'quantity' => 'required|integer',
        ]);
        $productId=$request->id;
        
        if (Auth::check()) {
            $item      = Product::findOrFail($productId);
            $userID    = Auth::user()->id;
            \Cart::session($userID)->add(array(
                'id' => $productId,
                'name' => $item->name,
                'price' => $item->price,
                'quantity' => $request->quantity,
                'attributes' =>  array(),
                'associatedModel' => $item
            ));
            flash('已加入購物車')->success()->important();
            return redirect('/');
        }else{
            return redirect('/login');
        }
    }
    public function myCart(){
        if (Auth::check()) {
            $userID    = Auth::user()->id;
            $cartContent = \Cart::session($userID)->getContent();
            dd($cartContent);
            return redirect('/');
        }else{
            return redirect('/login');
        }
    }

    public function removeCart($productId){
        if (Auth::check()) {
            $rowId     = $productId;
            $userID    = Auth::user()->id;

            //移除商品
            \Cart::session($userID)->remove($rowId);
            flash('已移除購物車的商品')->success();
            return redirect('/');
        }else{
            return redirect('/login');
        }
    }

    public function checkCart(){
        if (Auth::check()) {
            $payTypes = PayType::orderBy('id','asc')->get();
            $userID    = Auth::user()->id;
            $cartContent = \Cart::session($userID)->getContent();
            $cartQty= \Cart::session(Auth()->user()->id)->getTotalQuantity();
            $product = new Product;
            if($product->getQuantityStock($cartContent)!==true){
                return redirect('/');
            }
            return view('checkCart', compact('cartContent','cartQty','payTypes')); 
        }else{
            return redirect('/login');
        }
    }

    public function buyCart(Request $request){
        if (Auth::check()) {
            $validator=Validator::make($request->all(),[
                'receive_name' => 'required|string|max:50',
                'receive_phone' => 'required|string|max:50',
                'receive_address' => 'required|string|max:250',
                'pay_type_id' => 'required|integer',
                'remark' => 'required|string|max:250'
            ]);
            if($validator->fails()){
                return redirect('/checkCart')->withErrors($validator)->withInput(); //錯誤處理
                // withErrors ->將錯誤欄位帶入Session
                //withInput ->返回頁面時會將原資料帶入
            }
            $userID    = Auth::user()->id;
            $cartContent = \Cart::session($userID)->getContent();
            $product = new Product;
            if($product->getQuantityStock($cartContent)!==true){
                return redirect('/');
            }
            foreach ($cartContent as $row) {
                $product = Product::find($row->id);
                $product ->quantity = $product->quantity - $row->quantity;
                $product ->save();
                    
                //建立訂單明細
                $order = Order::create([
                    'user_id' => $userID,
                    'receive_name' => $request->receive_name,
                    'receive_phone' => $request->receive_phone,
                    'receive_address' => $request->receive_address,
                    'pay_type_id' => $request->pay_type_id,
                    'total'=> $row->price * $row->quantity ,
                    'remark' => $request->remark,
                ]);
                    
                    //建立訂單產品
                OrderProduct::create([
                    'order_id' => $order->id,
                    'product_id' => $row->id,
                    'qty' => $row->quantity
                ]);
            }
            //清空購物車
            \Cart::session($userID)->clear();
            flash('訂單已送出')->success();
            return redirect('/');
        }else{
            return redirect('/login');
        }
    }
}
