@extends('admin.admin_master')
@section('main')
    <main>
        <div class="head-title">
            <div class="left">
                <h2>Orders</h2>
                <ul class="breadcrumb">
                    <li>
                        <a href="{{ route('view-orders') }}">Orders</a>
                    </li>
                    <li><i class="bx bx-chevron-right"></i></li>
                    <li>
                        <a href="#" class="active">Home</a>
                    </li>
                </ul>
            </div>

        </div>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="full-container">
            <div class="content-large">
                <div class="table-data">
                    <div class="order">
                        <div class="head">
                            <h3>Processing Orders</h3>
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



                                @foreach ($processing_orders as $order)
                                    <tr class="text-center align-middle">
                                        <th class="align-middle" scope="row">
                                            {{ $processing_orders->firstItem() + $loop->index }}</th>
                                        </th>
                                        <td class="align-middle">{{ $order->order_date }}</td>
                                        <td style="color:brown" class="align-middle">{{ $order->invoice_no }}</td>
                                        <td class="align-middle">{{ $order->amount }}$</td>
                                        <td class="align-middle">{{ $order->payment_method }}</td>
                                        <td class="align-middle"><span
                                                class="status {{ $order->status }}">{{ $order->status }}</span></td>
                                        <td class="align-middle">
                                            <a href="{{ route('pending.details', $order->id) }}"
                                                class="btn btn-sm btn-info">View</a>

                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                        {{ $processing_orders->links() }}
                    </div>
                </div>
            </div>

            <div class="content-large">
                <div class="table-data">
                    <div class="order">
                        <div class="head">
                            <h3>Shipped Orders</h3>
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



                                @foreach ($shipped_orders as $order)
                                    <tr class="text-center align-middle">
                                        <th class="align-middle" scope="row">
                                            {{ $shipped_orders->firstItem() + $loop->index }}</th>
                                        <td class="align-middle">{{ $order->order_date }}</td>
                                        <td style="color:brown" class="align-middle">{{ $order->invoice_no }}</td>
                                        <td class="align-middle">{{ $order->amount }}$</td>
                                        <td class="align-middle">{{ $order->payment_method }}</td>
                                        <td class="align-middle"><span
                                                class="status {{ $order->status }}">{{ $order->status }}</span></td>
                                        <td class="align-middle">
                                            <a href="{{ route('pending.details', $order->id) }}"
                                                class="btn btn-sm btn-info">View</a>

                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                        {{ $shipped_orders->links() }}
                    </div>
                </div>

                <div class="content-large">
                    <div class="table-data">
                        <div class="order">
                            <div class="head">
                                <h3>Delivered Orders</h3>
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



                                    @foreach ($delivered_orders as $order)
                                        <tr class="text-center align-middle">
                                            <th class="align-middle" scope="row">
                                                {{ $delivered_orders->firstItem() + $loop->index }}</th>
                                            <td class="align-middle">{{ $order->order_date }}</td>
                                            <td style="color:brown" class="align-middle">{{ $order->invoice_no }}</td>
                                            <td class="align-middle">{{ $order->amount }}$</td>
                                            <td class="align-middle">{{ $order->payment_method }}</td>
                                            <td class="align-middle"><span
                                                    class="status {{ $order->status }}">{{ $order->status }}</span></td>
                                            <td class="align-middle">
                                                <a href="{{ route('pending.details', $order->id) }}"
                                                    class="btn btn-sm btn-info">View</a>

                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                            {{ $delivered_orders->links() }}
                        </div>
                    </div>

                    <div class="content-large">
                        <div class="table-data">
                            <div class="order">
                                <div class="head">
                                    <h3>Completed Orders</h3>
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



                                        @foreach ($completed_orders as $order)
                                            <tr class="text-center align-middle">
                                                <th class="align-middle" scope="row">
                                                    {{ $completed_orders->firstItem() + $loop->index }}</th>
                                                <td class="align-middle">{{ $order->order_date }}</td>
                                                <td style="color:brown" class="align-middle">{{ $order->invoice_no }}</td>
                                                <td class="align-middle">{{ $order->amount }}$</td>
                                                <td class="align-middle">{{ $order->payment_method }}</td>
                                                <td class="align-middle"><span
                                                        class="status {{ $order->status }}">{{ $order->status }}</span>
                                                </td>
                                                <td class="align-middle">
                                                    <a href="{{ route('pending.details', $order->id) }}"
                                                        class="btn btn-sm btn-info">View</a>

                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                                {{ $completed_orders->links() }}
                            </div>
                        </div>
                        <div class="content-large">
                            <div class="table-data">
                                <div class="order">
                                    <div class="head">
                                        <h3>Canceled Orders</h3>
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



                                            @foreach ($cancelled_orders as $order)
                                                <tr class="text-center align-middle">
                                                    <th class="align-middle" scope="row">
                                                        {{ $cancelled_orders->firstItem() + $loop->index }}</th>
                                                    <td class="align-middle">{{ $order->order_date }}</td>
                                                    <td style="color:brown" class="align-middle">{{ $order->invoice_no }}
                                                    </td>
                                                    <td class="align-middle">{{ $order->amount }}$</td>
                                                    <td class="align-middle">{{ $order->payment_method }}</td>
                                                    <td class="align-middle"><span
                                                            class="status {{ $order->status }}">{{ $order->status }}</span>
                                                    </td>
                                                    <td class="align-middle">
                                                        <a href="{{ route('pending.details', $order->id) }}"
                                                            class="btn btn-sm btn-info">View</a>

                                                    </td>
                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                    {{ $cancelled_orders->links() }}
                                </div>
                            </div>
                        </div>
                    </div>

    </main>
@endsection
