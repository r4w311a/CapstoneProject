@extends('main.master')
@section('productDetails')
@section('title')
    My Account
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
                  @if (session('success'))
                      <div class="alert alert-success">
                          {{ session('success') }}
                      </div>
                      @endif
                  <div class="show-products">
                    <h2>My Orders: </h2>
                  </div>
                
                    <table>
                        <tr>
                            <th>Invoice No.</th>
                            <th>Date</th>
                            <th>Total</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>

                        @foreach ($orders as $order)
                            
                        <tr>
                          <td>{{$order->invoice_no}}</td>
                          <td>{{$order->order_date}}</td>
                          <td>{{$order->amount}}$</td>
                          <td><span class="pending">{{$order->status}}</span></td>
                          <td class="order-icons">
                            <a href="{{url('/dashboard/order_details/'.$order->id)}}"><i class='bx bxs-show'></i></a>
                            <a><i class='bx bx-download'></i></a>
                           
                          </td>
                        </tr>
                        @endforeach
                        
                    </table>

                </div>
            </div>

        </div>






    </section>
</main>
@endsection
