@extends('app')

    @section('nav')


        @stop

        @section('content')

        <section id="cart_items">
      <div class="container">
          <div class="xsa">
              <ol class="breadcrumb">
                  <li><a href="{{ url('products')}}">Continue Shopping</a></li>
                  <li class="active">WishList</li>
              </ol>
          </div>
          <div class="table-responsive cart_info">
              @if(count($wishlist))
              <table class="table table-condensed">
                  <thead>
                      <tr class="cart_menu">
                          <td class="image">Item</td>
                          <td class="image">Name</td>

                      </tr>
                  </thead>
                  <tbody>
                      @foreach($wishlist as $item)
                      <tr>
                          <td class="cart_product">
                              <a href=""><img src="images/cart/one.png" alt=""></a>
                          </td>
                          <td class="cart_description">
                              <h4><a href="">{{$item->name}}</a></h4>
                          </td>
                          <td class="cart_delete">
                            {!! Form::open(['route' => ['delete.item', $item->rowid], 'method' => 'DELETE']) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                          </td>
                      </tr>
                      @endforeach
                      @else
                  <h4>You have no items in your Wishlist</h4>
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

                      @if (count($wishlist) === 0)
                        <a class="btn btn-warning update" href="{{url('clear-wish')}}" disabled>Clear Wishlist</a>
                        @elseif (count($wishlist) >=1 )
                          <a class="btn btn-warning update" href="{{url('clear-wish')}}">Clear Wishlist</a>
                          @endif
                  </div>
              </div>
          </div>
          <br>
          <br>
      </div>
  </section><!--/#do_action-->
        @stop
