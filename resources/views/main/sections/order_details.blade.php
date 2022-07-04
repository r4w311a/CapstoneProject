@extends('main.master')
@section('productDetails')
@section('title')
    Order Details
@endsection

<main>
   

    <section>

        <div class="check-row">

            <div class="col-10">

                <div class="check-container">
                    <div class="acc-information">
                        <h2>{{ Auth::user()->name }}</h2>
                        <h4>{{ Auth::user()->email }}</h4>
                    </div>
                    <ul class="sidebar-menu">
                        <a href="{{route('dashboard')}}"><li>My Orders</li></a>
                        <li>Change Password</li>
                        <li>Settings</li>
                        <a href="{{route('logout')}}"><li>Logout</li></a>
                    </ul>
                </div>
            </div>

            <div class="col-75">
                <br>
                <div class="check-container">
                    <div class="col-10">

                        <div class="check-container">
                            <div class="acc-information">
                                <h2>Shipping Information</h2>
                                
                            </div>
                            <table class="shipping-information">
                                <tr>
                                  <th>Name:</th>
                                  <td>{{$order->name}}</td>
                                </tr>
                                <tr>
                                  <th>Email:</th>
                                  <td>{{$order->email}}</td>
                                </tr>
                                <tr>
                                  <th>Phone:</th>
                                  <td>{{$order->phone}}</td>
                                </tr>
                                <tr>
                                    <th>Country:</th>
                                    <td>{{$order->country}}</td>
                                  </tr>
                                  <tr>
                                    <th>City:</th>
                                    <td>{{$order->city}}</td>
                                  </tr>
                                  <tr>
                                    <th>Address:</th>
                                    <td>{{$order->address}}</td>
                                  </tr>
                                  <tr>
                                    <th>Payment Method:</th>
                                    <td>{{$order->payment_method}}</td>
                                  </tr>
                                  <tr>
                                    <th>Total:</th>
                                    <td>{{$order->amount}}$</td>
                                  </tr>
                                  <tr>
                                    <th>Invoice No.</th>
                                    <td><span style="color:rgb(182, 45, 45)">{{$order->invoice_no}}<span></td>
                                  </tr>
                                  <tr>
                                    <th>Order Date:</th>
                                    <td>{{$order->order_date}}</td>
                                  </tr>
                                  <tr>
                                    <th>Status:</th>
                                    <td>{{$order->status}}</td>
                                  </tr>

                              </table>
                        </div>
                    </div>
                    <div class="col-10">

                        <div class="check-container">
                            <div class="acc-information">
                                <h2>Order Items Details</h2>
                                
                            </div>
                            <table class="shipping-information">
                                
                                    <tr>
                                        <th>Product</th>
                                        <th>Color</th>
                                        <th>Size</th>
                                        <th>Quantity</th>
                                        
                                    </tr>
                                   
                                    @foreach ($orderItem as $item)
                                        <tr>
                                            <td>
                                                <div class="cart-info">
                                                    <img src="{{ asset('uploads/products/thumbnails/' . $item->product->product_thumbnail) }}"
                                                        alt="" />
                                                    <div>
                                                        <p>{{$item->product->product_name}}</p>
                                                        <span>Price : {{ $item->product->product_price }}$ </span> <br />
                                                    </div>
                                                </div>
                                            </td>
                                            
                                            <td>{{$item->color}}</td>
                                            <td>{{$item->size}}</td>
                                            <td>{{$item->qty}}</td>
                                             
                                        </tr>
                        
                                       
                                    @endforeach
                        
                        
                                </table>
                        </div>
                    </div>

                </div>
            </div>

        </div>






    </section>
</main>
@endsection
