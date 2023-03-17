{{--  繼承了master.blade.php  --}}
@extends('layouts.master')

{{--  填名為content的洞  --}}
@section('content')
<!-- Slider
============================================= -->
    <form method="POST" action="{{ route('addCart') }}">
      @csrf
    <div class="row justify-content-center text-center">
    <div class="col-4">
      <div class="card mb-4 rounded-3 shadow-sm">
        <div class="card-header py-3">
          <h4 class="my-0 fw-normal">{{ $product->name }}</h4>
        </div>
        <div class="card-body">
          <img  width="250" height="250"  src ="{{ asset($product->picture_url) }}"  >
          <h1 class="card-title pricing-card-title">${{ $product->price }}<small class="text-muted fw-light"></small></h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li>{{ $product->describe }}</li>
          </ul>
          <div class="row justify-content-center text-center" >
            <div class="col-4">
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">目前商品數量</span>
                <input type="number" name="quantity" class="w-25 form-control" value={{ $product->quantity }} required readonly="readonly">
              </div>
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">數量</span>
                <input type="number" name="quantity" class="w-25 form-control" value=0 min=0 max={{ $product->quantity }} required>
                <input type="number" name="id" value="{{ $product->id }}" hidden>
              </div>
            </div>
          </div>
          <button type="submit"  class="btn btn-primary">加入購物車</button>
        </div>
      </div>
    </div>
  </form>
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
