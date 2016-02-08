@extends('app')

    @section('nav')


        @stop

        @section('content')
        <section id="cart_items">
      <div class="container">
          <div class="xsa">

                  <h1 class="title text-center">Order Review</h1>
              </div>
          <div class="table-responsive cart_info">
              @if(count($cart))
              <table class="table table-condensed">
                  <thead>
                      <tr class="cart_menu">
                          <td class="image">Item in your Cart</td>
                          <td class="description">Item Name</td>
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


                          <td class="cart_total">
                              <p class="cart_total_price">${{$item->subtotal}}</p>
                          </td>
                          <td class="cart_delete">
                              <a class="cart_quantity_delete" href=""></i></a>
                          </td>
                      </tr>
                      @endforeach
                      @else
                  <p>You have no items in the shopping cart</p>
                  @endif
                  </tbody>
              </table>
          </div>
      </div>
  </section> <!--/#cart_items-->

  <section id="do_action">
      <div class="container-fluid">
          <div class="row">

                  <div class="total_summary pull-right">
                    <ul>
                      <h4>Delivery Cost <span>$20</span></h4>
                      <h4>Total <span>${{Cart::total()}}</span></h4>
                      <form method="POST" action="{{ url('proceed-to-payment') }}">
                        <input type="hidden" name="id" value="{{$cart}}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="submit" class="btn btn-fefault add-to-cart"><i class="fa fa-shopping-cart"></i>Proceed to payment</button>
                      </form>
                    </ul>
                  </div>
              </div>
          </div>

          <br>
          <br>
  </section><!--/#do_action-->
  @stop
