{{--  繼承了master.blade.php  --}}
@extends('layouts.master')

{{--  填名為content的洞  --}}
@section('content')
<!-- Slider
============================================= -->
<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
    @foreach( $products as $product )
        @if($loop->iteration == 1)
            <div class="carousel-item active">
        @else
            <div class="carousel-item"> 
        @endif
        <img src ="{{ asset($product->picture_url) }}"  >
        <div class="container">
            <div class="carousel-caption">

            <h1  class="link-light">{{ $product->name }}</h1>
          </div>
        </div>
      </div>
    @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
        @foreach( $products as $product )
        <div class="col-lg-4">
            <img  width="140" height="140"  src ="{{ asset($product->picture_url) }}"  >
            <h2>{{ $product->name }}</h2>
            <p>{{ $product->describe }}</p>
            <p><a class="btn btn-secondary" href="{{ asset("products/".$product->id) }}">詳細資訊 &raquo;</a></p>
        </div>
        @endforeach
      </div>
    </div>

    <!-- START THE FEATURETTES -->
    @foreach( $products as $product )
    <hr >
    <div class="row featurette">
      <div class="col">
      </div>
      <div class="col-md-7">
        <h2 class="featurette-heading">{{ $product->name }}</h2>
        <p class="lead">{{ $product->describe }}</p>
      </div>
      <div class="col-md-4">
        <a href="{{ asset("products/".$product->id) }}">
          <img  width="300" height="300"  src ="{{ asset($product->picture_url) }}"  >
        </a>
      </div>
    </div>
    @endforeach

    <hr class="featurette-divider">

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
