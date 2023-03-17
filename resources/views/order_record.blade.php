{{--  繼承了master.blade.php  --}}
@extends('layouts.master')

{{--  填名為content的洞  --}}
@section('content')
<!-- Slider
============================================= -->
    @foreach( $orderProducts as $row )
    <div class="row featurette">
        <div class="col-2">
            
        </div>
        <div class="col-2">
            <img  width="150" height="150"  src ="{{ $row->picture_url }}"  >
            <h5>{{ $row->name }}</h5>
            <p class="lead">${{ $row->price }} x {{ $row->qty }}</p>
        </div>
        <div class="col-md-3">
            <p class="lead">收貨人名稱:{{ $row->receive_name }}</p>
            <p class="lead">收貨人電話:{{ $row->receive_phone }}</p>
            <p class="lead">收貨人地址:{{ $row->receive_address }}</p>
            <p class="lead">付款方式:{{ $row->pay_type_chinese }}</p>
            <p class="lead">備註:{{ $row->remark }}</p>
            <p class="lead">總金額:{{ $row->total }}</p>
            <p class="lead">訂單日期:{{ $row->created_at }}</p>
        </div>
    </div>
    <hr>
    @endforeach
</section><!-- #content end -->
@endsection

{{--  填名為title的洞，並繼承父視圖的內容 --}}
@section('title')
{{--  繼承父視圖 section show裡頭的內容  --}}
@parent
{{--  <title>My Laravel Shop | Canvas</title>  --}}
@endsection
