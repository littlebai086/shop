{{--  繼承了master.blade.php  --}}
@extends('layouts.master')

{{--  填名為content的洞  --}}
@section('content')
<!-- Main
============================================= -->
<main>

  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      @foreach($main_titles as $main_title)
        @if($loop->first)
          <div class="carousel-item active">
        @else
          <div class="carousel-item">
        @endif
          <img src="{{ url('/images/'.$main_title->url) }}"  width="100%" height="100%" /></img>
          <div class="container">
            @if($loop->first)
              <div class="carousel-caption text-start">
            @elseif($loop->last)
              <div class="carousel-caption text-end">
            @else
              <div class="carousel-caption">
            @endif
              <h1>{{ $main_title->title }}</h1>
              <p>{{ $main_title->content }}</p>
              <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
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
    <div class="row">
      <div class="col-xl-12">
        <div class="section-tittle mb-70">
          <h2>暢銷商品</h2>
        </div>
      </div>
    </div>
    <!-- Three columns of text below the carousel -->
    <div class="row">
      @foreach($products as $product)
      <div class="col-lg-4">
        <img src="{{ url('/images/'.$product->pic) }}"  /></img>
        <h2>{{ $product->name }}</h2>
        <p>{{ $product->spec }}</p>
        <p><a class="btn btn-secondary" href="{{ url('/shop/products/' . $product->id) }}">查看詳情 &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      @endforeach
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->
    @foreach($new_products as $new_product)
    <hr class="featurette-divider">
    <div class="row featurette">
      @if($loop->index==1)
        <div class="col-md-7 order-md-2">
      @else
        <div class="col-md-7">
      @endif
        <h2 class="featurette-heading">{{ $new_product->name }} <span class="text-muted"></span></h2>
        <p class="lead">{!! $new_product->desc !!}</p>
      </div>
      <div class="col-md-5">
        <img src="{{ url('/images/'.$product->pic) }}"  /></img>
      </div>
    </div>
    @endforeach
    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->
</main>
@endsection
