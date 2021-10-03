<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.83.1">
    <title>Carousel Template · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">

    

    <!-- Bootstrap core CSS -->
<link href="{{ asset('assets/dist/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/headers.css') }}" rel="stylesheet">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/carousel.css') }}" rel="stylesheet">
  </head>

  <body>
    
    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
          <div class="logo">
            <a href="{{ url('/') }}"><img src="{{ asset('images/products/logo.png') }}" alt=""></a>
          </div>
          <a class="navbar-brand" href="#">小白購物網</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ url('/') }}">首頁</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ url('/shop/') }}">商店</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">關於我們</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">最新消息</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">聯絡我們</a>
              </li>
            </ul>
            <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
              <a href="#" class="nav-link text-white">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"></svg>
                搜尋
              </a>
            </li>
            <li>
              <a href="{{ url('/shop/cart/') }}" class="nav-link text-white">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"></svg>
                購物車
              </a>
            </li>
            <li>
            @if(!Auth::check())
              <a href="{{ url('/login') }}" class="nav-link text-white">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"></svg>
                使用者
            @else
            <li><a href="#"><span>歡迎,{{ Auth::user()->name }}</span></a></li>
            @endif
              </a>
            </li>
          </ul>
          </div>
        </div>
      </nav>
    </header>
    {{--  挖洞給子視圖去填  --}}
    @yield('content')

    {{-- 載入footer  --}}
    @include('includes.footer')    
        <script src="{{ asset('assets/dist/js/bootstrap.bundle.min.js') }}"></script>
    
          
      </body>
    </html>
    