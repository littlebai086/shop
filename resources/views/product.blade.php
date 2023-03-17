{{--  繼承了master.blade.php  --}}
@extends('layouts.master')

{{--  填名為content的洞  --}}
@section('content')
<!-- Slider
============================================= -->

    <!-- START THE FEATURETTES -->
    @foreach( $products as $product )
    <div class="row featurette">
      <div class="col-md-2">
        <img  width="250" height="250"  src ="{{ asset($product->picture_url) }}"  >
      </div>
      <div class="col-md-7">
        <h2 class="featurette-heading">{{ $product->name }}</h2>
        <p class="lead">剩餘數量:{{ $product->quantity }}</p>
        <p class="lead">{{ $product->describe }}</p>
      </div>
      <div class="col-md-3">

        <p class="featurette-heading"><a class="btn btn-secondary" href="{{ asset("products/".$product->id) }}">詳細資訊 &raquo;</a></p>
      </div>
    </div>
    <hr class="featurette-divider">
    @endforeach

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->

</section><!-- #content end -->
@endsection

{{--  填名為title的洞，並繼承父視圖的內容 --}}
@section('title')
{{--  繼承父視圖 section show裡頭的內容  --}}
@parent
{{--  <title>My Laravel Shop | Canvas</title>  --}}
@endsection
