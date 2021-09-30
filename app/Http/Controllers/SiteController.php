<?php

namespace App\Http\Controllers;
use App\Models\Element;
use App\Models\Product;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    //
    public function renderHomePage()
    {
        //$main_titles = Element::where('page','index')->where('position','main_title')->orderBy('sort','asc')->get();
        //$heads = Product::where('page','index')->where('position','main_title')->orderBy('sort','asc')->get();
        //$els_gallery = Element::where('page','index')->where('position','gallery')->enabled()->get();
        $products = Product::where('hoted',true)->orderBy('price','desc')->take(3)->get();
        $new_products = Product::orderBy('created_at','desc')->take(3)->get();
        //$el_news_top = Element::where('page','index')->where('position','news_top')->enabled()->first();
        //$prod_news = Product::where('hoted',true)->orderBy('created_at','desc')->take(6)->get();
        //$el_video = Element::where('page','index')->where('position','video')->enabled()->first();
        //$best_prods = Product::where('hoted',true)->orderBy('price','desc')->take(2)->get();
        //return view('index',compact('el_slider','els_gallery','products','el_news_top','prod_news','el_video','best_prods'));
        return view('shop',compact('products','new_products'));
    }
    public function renderProductDetailPage(Request $request, Product $product)
    {
        //$main_titles = Element::where('page','index')->where('position','main_title')->orderBy('sort','asc')->get();
        return view('shop.product_detail',compact('product'));
    }
    public function renderShopPage()
    {
        return view('shop.index');
    }
}
