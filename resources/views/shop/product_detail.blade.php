@extends('layouts.master')

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
    <!-- START THE FEATURETTES -->
    <form class="row contact_form" action="{{ url('/shop/addcart/') }}" method="post" novalidate="novalidate" wire:submit.prevent="submit">
    @csrf
    <hr class="featurette-divider">
    <div class="row featurette">
       <div class="col-md-7">
       <input type="text" class="form-control" value="{{ $product->name }}" id="product_name" name="product_name" wire:model.defer="name" hidden/>
        <h2 class="featurette-heading">{{ $product->name }} <span class="text-muted"></span></h2>
        <p class="lead">{!! $product->desc !!}</p>
      </div>
      <div class="col-md-5">
        <img src="{{ url('/images/'.$product->pic) }}"  /></img>
      </div>
      <div class="card_area">
        <div class="product_count_area">
            <p>數量</p>
            <div class="product_count d-inline-block">
                <span class="product_count_item inumber-decrement"> <i class="ti-minus"></i></span>
                <input class="product_count_item input-number" type="number"  id="qty" name="qty" value="1" min="1" max="10">
                <span class="product_count_item number-increment"> <i class="ti-plus"></i></span>
            </div>
            <p>${{ $product->price }}</p>
            <input type="number" class="form-control" value="{{ $product->price }}" id="price" name="price" hidden/>
        </div>
        <input type="number" class="form-control" value="{{ $product->id }}" id="product_id" name="product_id" hidden/>
        <input class="" type="submit" value="加入購物車">
    <div class="add_to_cart">
    </div>
    </div>
    <hr class="featurette-divider">
    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->
</main>
@endsection
