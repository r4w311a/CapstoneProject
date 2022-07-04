@extends('admin.admin_master')
@section('main')
    <main>
        <div class="head-title">
            <div class="left">
                <h2>User Details</h2>
                <ul class="breadcrumb">
                    <li>
                        <a href="{{ route('view-users') }}">Orders</a>
                    </li>
                    <li><i class="bx bx-chevron-right"></i></li>
                    <li>
                        <a href="#" class="active">User Details</a>
                    </li>
                </ul>
            </div>
        </div>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="myContainer">

            <div class="content-large">

                <div class="table-data">
                    <div class="order">
                        <div class="head">
                            <h3 style="text-align: center">User Info</h3>
                        </div>
                        <table class="shipping-information">
                            <tr>
                                <th>Name:</th>
                                <td>{{ $user->name }}</td>
                            </tr>
                            <tr>
                                <th>Email:</th>
                                <td>{{ $user->email }}</td>
                            </tr>
                            
                           
                            <tr>
                                <th>Registered Date:</th>
                                <td>{{$user->created_at->format('d F Y')}}</td>
                            </tr>
                            <tr>
                                <th>Account Status:</th>
                                @if ($user->email_verified_at == NULL)
                                    <td><span class="status Pending">Not Verified</span></td>
                                @else
                                <td><span class="status Confirmed">Verified</span></td>
                                @endif
                            </tr>
                            

                        </table>

                    </div>
                </div>
            </div>
            <div class="content-small">


                <div class="table-data">
                    <div class="order">
                        <div class="head">
                            <h3 style="text-align: center">Orders Overview</h3>
                        </div>
                        <table class="shipping-information">

                            <tr>
                                <th>Total Orders:</th>
                                <td>{{ $orders->count() }}</td>
                            </tr>
                            <tr>
                                <th>Total Amount:</th>
                                <td>{{$orders->sum('amount')}}$</td>
                            </tr>
                            @if ($orders->count() > 0)
                            <tr>
                                <th>Last Order Date:</th>
                                <td>{{$orders->last()->created_at->format('d F Y')}}</td>
                            </tr>
                           @else
                           <tr>
                            <th>Last Order Date:</th>
                            <td>No Orders</td>
                        </tr>
                            @endif

                        </table>

                    </div>
                </div>
            </div>



            <div class="content-large">
                <div class="table-data">
                    <div class="order">
                        <div class="head">
                            <h3>All Orders</h3>
                        </div>
                        <table>
                            <thead>
                                <tr class="text-center">
                                    <th>#</th>
                                    <th>Date</th>
                                    <th>Invoice No.</th>
                                    <th>Price</th>
                                    <th>Payment Method</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>



                                @foreach ($orders as $order)

                               
                                <tr class="text-center align-middle">
                                    <th class="align-middle" scope="row">
                                        {{ $orders->firstItem() + $loop->index }}</th>
                                    <td class="align-middle">{{$order->order_date}}</td>
                                    <td style="color:brown" class="align-middle">{{$order->invoice_no}}</td>
                                    <td class="align-middle">{{$order->amount}}$</td>
                                    <td class="align-middle">{{$order->payment_method}}</td>
                                    <td class="align-middle"><span class="status {{$order->status}}">{{$order->status}}</span></td>
                                    <td class="align-middle">
                                        <a href="{{route('pending.details',$order->id)}}" class="btn btn-sm btn-info">View</a>

                                    </td>
                                </tr>
                               
                                @endforeach

                            </tbody>
                        </table>
                        {{ $orders->links() }}
                    </div>
                </div>
           


        </div>




    </main>
@endsection
