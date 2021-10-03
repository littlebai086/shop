<?php

namespace App\Http\Controllers;
use App\Models\Element;
use App\Models\Product;
use App\Models\ShoppingCart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class SiteController extends Controller
{
    //
    public function renderHomePage()
    {
        $products = Product::where('hoted',true)->orderBy('price','desc')->take(3)->get();
        $new_products = Product::orderBy('created_at','desc')->take(3)->get();
         return view('shop',compact('products','new_products'));
    }
    public function renderProductDetailPage(Request $request, Product $product)
    {
        return view('shop.product_detail',compact('product'));
    }
    public function renderShopPage()
    {
        return view('shop.index');
    }

    public function renderCartPage()
    {
        $user = Auth::user();
        if(isset($user)){
            $shopping_carts = ShoppingCart::join('products', 'shopping_carts.product_id', '=', 'products.id')
                                        ->where('shopping_carts.user_id',$user->id)
                                        ->select('shopping_carts.*', 'products.pic')
                                        ->orderBy('shopping_carts.created_at','desc')
                                        ->get();
            /*$shopping_carts = DB::table('shopping_carts')
                                ->join('products', 'shopping_carts.product_id', '=', 'products.id')
                                ->select('shopping_carts.*', 'products.pic')
                                ->where('shopping_carts.user_id',$user->id)
                                ->orderBy('shopping_carts.created_at','desc')
                                ->get();*/
            //dd($shopping_carts);
        }
        return view('shop.cart',compact('shopping_carts'));
    }

    public function addCart(Request $request)
    {
        $user = Auth::user();
        $data = $request->only(['product_id','product_name','qty','price']);
        if(isset($user)){
            $newShoppingCart = new ShoppingCart();
            $newShoppingCart->user_id = $user->id;
            $newShoppingCart->product_id = $data['product_id'];
            $newShoppingCart->name = $data['product_name'];
            $newShoppingCart->price = $data['price'];
            $newShoppingCart->qty = $data['qty'];
            $newShoppingCart->save();


            /*\Cart::session($user->id)->add([
                'id' => $product->id,
                'name' => $product->name,
                'price' => $product->price,
                'quantity' => 1,
                'attributes' => [],
                'associatedModel' => $product
            ]);*/
        }
        return redirect('shop/cart');
        //return view('shop.cart');
    }

    public function loginOut(Request $request)
    {
        $request->session()->flush();
        return view('shop.index');
    }
}
