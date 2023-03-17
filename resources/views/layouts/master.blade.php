
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Carousel Template · Bootstrap 5 繁體中文文件 - 六角學院 v5.1</title>
    <link rel="canonical" href="https://bootstrap5.hexschool.com/docs/5.1/examples/carousel/">
    
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <style>
      /* .dropdown-menu li:hover .sub-menu {visibility: visible;}
      .dropdown:hover .dropdown-menu {display: block;} */
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
  @include('flash::message')
  <nav class="navbar navbar-expand-md navbar-dark navbar-static-top bg-dark">
    <div class="container-fluid">
        <div id='logo'><a href="{{ asset('') }}"><img src="{{ asset('images/logo.png') }}" /></a></div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        @include('menu')

        @guest
          <button class='btn btn-outline-success' onclick="location.href='{{ asset('login') }}'" >登入</button>
        @else     

          @if (isset($cartContent))
            @include('includes.top_cart')
          @endif
                                {{-- <!-- Top Cart
						============================================= -->
        <div id="top-cart">
          @if (isset($cartContent) && isset($cartQty))
            @include('includes.top_cart')
          @endif
        </div><!-- #top-cart end --> --}}
          <form id="logout-form" action="{{ route('logout') }}" method="POST" >
            @csrf
            <input type='submit' class='btn btn-outline-success' value='登出'>
          </form>
        @endguest
          
      </div>
    </div>
  </nav>
</header>

<main>
    {{--  挖洞給子視圖去填  --}}
    @yield('content')
  <!-- FOOTER -->
</main>
    {{-- 載入footer  --}}
    @include('layouts.footer')
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src='https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js' integrity='sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p' crossorigin='anonymous'></script>
    <script>
      // Topbar Hide
      $('#top-bar').on('click', '#close-bar', function () {
          $(this).parents('#top-bar').slideUp(300);
          $('body').css('padding-top', 0);
      })

      // Custom Carousel
      $('.owl-carousel').owlCarousel({
          items: 1,
          dotsContainer: '#item-color-dots',
          loop: true,
      });

      <!-- Flash Message Overlay會用到，需保留 -->
      $('#flash-overlay-modal').modal();

      <!-- Flash Message 3秒之後消失，非必須 -->
      $('div.alert').delay(3000).fadeOut(350);
  </script>
  </body>
  
</html>
