@extends('admin.admin_master')
@section('main')
    <main>
        <div class="head-title">
            <div class="left">
                <h2>Order Details</h2>
                <ul class="breadcrumb">
                    <li>
                        <a href="{{ route('view-orders') }}">Orders</a>
                    </li>
                    <li><i class="bx bx-chevron-right"></i></li>
                    <li>
                        <a href="#" class="active">Order Details</a>
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
                            <h3 style="text-align: center">Shipping Info</h3>
                        </div>
                        <table class="shipping-information">
                            <tr>
                                <th>Name:</th>
                                <td>{{ $order->name }}</td>
                            </tr>
                            <tr>
                                <th>Email:</th>
                                <td>{{ $order->email }}</td>
                            </tr>
                            <tr>
                                <th>Phone:</th>
                                <td>{{ $order->phone }}</td>
                            </tr>
                            <tr>
                                <th>Country:</th>
                                <td>{{ $order->country }}</td>
                            </tr>
                            <tr>
                                <th>City:</th>
                                <td>{{ $order->city }}</td>
                            </tr>
                            <tr>
                                <th>Address:</th>
                                <td>{{ $order->address }}</td>
                            </tr>


                        </table>

                    </div>
                </div>
            </div>
            <div class="content-small">


                <div class="table-data">
                    <div class="order">
                        <div class="head">
                            <h3 style="text-align: center">Order Details</h3>
                        </div>
                        <table class="shipping-information">

                            <tr>
                                <th>Payment Method:</th>
                                <td>{{ $order->payment_method }}</td>
                            </tr>
                            <tr>
                                <th>Total:</th>
                                <td>{{ $order->amount }}$</td>
                            </tr>
                            <tr>
                                <th>Invoice No.</th>
                                <td><span style="color:rgb(182, 45, 45)">{{ $order->invoice_no }}<span></td>
                            </tr>
                            <tr>
                                <th>Order Date:</th>
                                <td>{{ $order->order_date }}</td>
                            </tr>
                            <tr>
                                <th>Status:</th>
                                <td>{{ $order->status }}</td>
                            </tr>

                            @if ($order->status == 'Processing')
                                <tr>
                                    <th><a href="{{ route('shipped', $order->id) }}" class="btn-download">
                                            <span>Order Shipped</span>
                                        </a></th>
                                </tr>
                            @elseif ($order->status == 'Shipped')
                                <tr>
                                    <th><a href="{{ route('delivered', $order->id) }}" class="btn-download">
                                            <span>Order Delivered</span>
                                        </a></th>
                                </tr>
                            @elseif ($order->status == 'Delivered')
                                <tr>
                                    <th><a href="{{ route('completed', $order->id) }}" class="btn-download">
                                            <span>Order Completed</span>
                                        </a></th>
                                </tr>
                            @elseif ($order->status == 'Completed')
                                <tr>
                                    <th><a href="{{ route('cancelled', $order->id) }}" class="btn-download">
                                            <span>Cancel Order</span>
                                        </a></th>
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
                            <h3>Products List</h3>
                        </div>
                        <table>
                            <thead>
                                <tr class="text-center">

                                    <th>Product Name</th>
                                    <th>Product Image</th>
                                    <th>Product Color</th>
                                    <th>Product Size</th>
                                    <th>Product Price</th>
                                    <th>Product Quantity</th>

                            </thead>
                            <tbody>



                                @foreach ($orderItem as $item)
                                    <tr class="text-center align-middle">

                                        <td class="align-middle">{{ $item->product->product_name }}</td>
                                        <td class="align-middle"><img
                                                src="{{Storage::disk('s3')->url('products/' . $item->product->product_thumbnail)}}"
                                                class="img-thumbnail mx-auto " style="width:80px;height:80px" />
                                        </td>
                                        <td class="align-middle">{{ $item->color }}</td>
                                        <td class="align-middle">{{ $item->size }}</td>
                                        <td class="align-middle">{{ $item->price }}$</td>
                                        <td class="align-middle">{{ $item->qty }}</td>
                                @endforeach
                            </tbody>

                        </table>

                    </div>
                </div>
            </div>


        </div>




    </main>
@endsection
