@extends('app')

    @section('nav')


        @stop

        @section('content')

        <section id="cart_items">
      <div class="container">
          <div class="xsa">
              <ol class="breadcrumb">
                  <li><a href="{{ url('products')}}">Continue Shopping</a></li>
                  <li class="active">Shopping Cart</li>
              </ol>
          </div>
          <div class="table-responsive cart_info">
              @if(count($cart))
              <table class="table table-condensed">
                  <thead>
                      <tr class="cart_menu">
                          <td class="image">Item</td>
                          <td class="description"></td>
                          <td class="price">Price</td>
                          <td class="quantity">Quantity</td>
                          <td class="total">Total</td>
                          <td></td>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach($cart as $item)
                      <tr>
                          <td class="cart_product">
                              <a href=""><img src="images/cart/one.png" alt=""></a>
                          </td>
                          <td class="cart_description">
                              <h4><a href="">{{$item->name}}</a></h4>

                          </td>
                          <td class="cart_price">
                              <p>${{$item->price}}</p>
                          </td>
                          <td class="cart_quantity">
                             <div class="cart_quantity_button">
                                 <a class="cart_quantity_up" href='{{ url("cart?product_id=$item->id&increment=1") }}'> + </a>
                                 <input class="cart_quantity_input" type="text" name="quantity" value="{{$item->qty}}" autocomplete="off" size="2">
                                 <a class="cart_quantity_down" href='{{ url("cart?product_id=$item->id&decrease=1") }}'> - </a>
                             </div>
                         </td>
                          <td class="cart_total">
                              <p class="cart_total_price">${{$item->subtotal}}</p>
                          </td>
                          <td class="cart_delete">
                            {!! Form::open(['route' => ['delete.item', $item->rowid], 'method' => 'DELETE']) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                          </td>
                      </tr>
                      @endforeach
                      @else
                  <h4>You have no items in the shopping cart</h4>
                  <br><br><br>
                  @endif
                  </tbody>
              </table>
          </div>
      </div>
  </section> <!--/#cart_items-->

  <section id="do_action">
      <div class="container">
          <div class="row">
              <div class="col-sm-6">
                <hr>
                  <div class="total_area">
                      <ul>
                          <h3>Total <span>${{Cart::total()}}</span></h3>
                      </ul>
                      <br>
                      <a class="btn btn-default update" href="{{url('clear-cart')}}">Clear Cart</a>
                      <a class="btn btn-default check_out" href="{{url('order')}}">Place Order</a>
                  </div>
              </div>
          </div>
          <br>
          <br>
      </div>
  </section><!--/#do_action-->
        @stop
