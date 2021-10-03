<tr>
    <td>
      <div class="media">
        <div class="d-flex">
          <img src="" alt="{{ $shopping_cart['name'] }}" />
        </div>
      </div>
    </td>
    <td>
      <h5>$ {{ $shopping_cart['price'] }}</h5>
    </td>
    <td>
      <div class="product_count">
        <span class="input-number-decrement" wire:click="decrement"> <i class="ti-minus"></i></span>
        <input class="input-number" type="number" value="{{  $shopping_cart['qty'] }}" wire:model="item.quantity" min="0" max="10" >
        <span class="input-number-increment" wire:click="increment"> <i class="ti-plus"></i></span>
      </div>
    </td>
    <td>
      <h5>${{ $shopping_cart['price'] * $shopping_cart['qty'] }}</h5>
    </td>
  </tr>