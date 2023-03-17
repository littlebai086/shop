<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewController extends Controller
{
    //
    public function new()
    {
        $news = News::orderBy('id','desc')->take(3)->get();
        return view('new', compact('news')); //用view()的第二參數搭配compact()傳遞參數包
    }
}
