@extends('admin.admin_master')
@section('main')
<main>
    <div class="head-title">
        <div class="left">
            <h2>Dashboard</h2>
            <ul class="breadcrumb">
                <li>
                    <a href="{{route('admin.dashboard')}}">Dashboard</a>
                </li>
                <li><i class="bx bx-chevron-right"></i></li>
                <li>
                    <a href="#" class="active">Home</a>
                </li>
            </ul>
        </div>
       
    </div>
    <ul class="box-info">
        <li>
            <i class='bx bxs-calendar-check'></i>
            <span class="text">
                <h3>{{count($orders)}}</h3>
                <p>Total Orders</p>
            </span>
        </li>
        <li>
            <i class='bx bxs-group'></i>
            <span class="text">
                <h3>{{$users}}</h3>
                <p>Customers</p>
            </span>
        </li>
        <li>
            <i class='bx bxs-dollar-circle'></i>
            <span class="text">
                <h3>{{$total}}$</h3>
                <p>Total Sales</p>
            </span>
        </li>
    </ul>
    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Recent Orders</h3>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>Username</th>
                        <th>Invoice No.</th>
                        <th>Order Date</th>
                        <th>Amount</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $order)
                    <tr>
                        <td>
                            {{$order->user->name}}
                        </td>
                        <td>
                            {{$order->invoice_no}}
                        </td>
                        <td>{{$order->order_date}}</td>
                        <td>{{$order->amount}}$</td>
                        <td><span class="status {{$order->status}}">{{$order->status}}</span></td>
                    </tr>
                 
                    @endforeach
                </tbody>
            </table>
        </div>
        </div>
</main>
@endsection