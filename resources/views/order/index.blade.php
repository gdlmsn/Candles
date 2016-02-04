@extends('app')

    @section('nav')


        @stop

        @section('content')
        <section id="cart_items">
      <div class="container">
          <div class="xsa">
              <ol class="breadcrumb">
                  <h1 class="title text-center">Order Review</h1>

              </ol>
          </div>
          <div class="table-responsive cart_info">
              @if(count($cart))
              <table class="table table-condensed">
                  <thead>
                      <tr class="cart_menu">
                          <td class="image">Item</td>
                          <td class="description"></td>
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
                              <a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
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
      <div class="container">
          <div class="row">
              <div class="col-sm-6">
                  <div class="total_summary">
                      <ul>

                          <h4>Shipping Cost <span>$20</span></h4>

                          <h3>Total <span>${{Cart::total()}}</span></h3>
                      </ul>
                      <a class="btn btn-default check_out" href="{{ action('OrderController@order') }}"><i class="fa fa-info"></i>Proceed to payment</a>
                  </div>
              </div>
          </div>
          <br>
          <br>
      </div>
  </section><!--/#do_action-->
  @stop
