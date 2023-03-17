<ul class='navbar-nav'>
    <li class='nav-item dropdown'>
      <a class="nav-link dropdown-toggle"  href="#"  data-bs-toggle="dropdown" aria-expanded="false">購物車
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
        </svg>
      </a>
      <ul class='dropdown-menu dropdown-menu-end' aria-labelledby='dropdown01'>
        @if (isset($cartContent))
            @if(count($cartContent)>0)
                @foreach ($cartContent as $item)
                <li style="width: 300px; ">
                {{-- <a href="#" class='dropdown-item'><img
                        src="{{ $item->associatedModel->picture_url }}"
                        alt="{{ $item->associatedModel->name }}" 
                        width="100px" height="100px"/>{{ $item->associatedModel->name }}
                <span class="top-cart-item-price">${{ $item->price }} x {{ $item->quantity }}</span></a> --}}
                <div class="row justify-content-center  align-items-center">
                  <div class="col-auto">
                    <img
                        src="{{ $item->associatedModel->picture_url }}"
                        alt="{{ $item->associatedModel->name }}" 
                        width="100px" height="100px"/>
                  </div>
                  <div class="col ">
                    <p class="mb-auto">{{ $item->associatedModel->name }} 
                      ${{ $item->price }} x {{ $item->quantity }}</p>
                  </div>
                  <div class="col-auto">
                    <a href="{{ asset('/removeCart/'.$item->id) }}" class="">移除</a>
                  </div>
                </div>
                </li>
                @endforeach
            <li>
            <div class="row justify-content-center  align-items-center">
                <div class="col-auto">
                    <span class="fleft top-checkout-price t600 font-secondary" style="color: #333;">${{ \Cart::getTotal() }}</span>
                </div>
                <div class="col ">
                </div>
                <div class="col-auto">
                    <a href='{{ asset('/checkCart') }}' class='' >送出訂單</a>
                </div>
            </div>                
            </li>
            @else
                <li>購物車內無商品</li>
            @endif
        @endif
      </ul>
    </li>
  </ul>