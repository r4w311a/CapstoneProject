@extends('admin.admin_master')
@section('main')
<main>
    <div class="head-title">
        <div class="left">
            <h2>Dashboard</h2>
            <ul class="breadcrumb">
                <li>
                    <a href="{{route('dashboard')}}">Dashboard</a>
                </li>
                <li><i class="bx bx-chevron-right"></i></li>
                <li>
                    <a href="#" class="active">Home</a>
                </li>
            </ul>
        </div>
        <a href="#" class="btn-download">
            <i class="bx bx-download"></i>
            <span class="text">Download PDF</span>
        </a>
    </div>
    <ul class="box-info">
        <li>
            <i class='bx bxs-calendar-check'></i>
            <span class="text">
                <h3>26</h3>
                <p>New Order</p>
            </span>
        </li>
        <li>
            <i class='bx bxs-group'></i>
            <span class="text">
                <h3>1468</h3>
                <p>Visitors</p>
            </span>
        </li>
        <li>
            <i class='bx bxs-dollar-circle'></i>
            <span class="text">
                <h3>$649</h3>
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
                        <th>User</th>
                        <th>Date Order</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <img src="{{ asset('backend/images/avatar.png')}}">
                            <p>User Name</p>
                        </td>
                        <td>06-02-2022</td>
                        <td><span class="status completed">Completed</span></td>
                    </tr>
                    <tr>
                        <td>
                            <img src="{{ asset('backend/images/avatar.png')}}">
                            <p>User Name</p>
                        </td>
                        <td>06-02-2022</td>
                        <td><span class="status pending">Pending</span></td>
                    </tr>
                    <tr>
                        <td>
                            <img src="{{ asset('backend/images/avatar.png')}}">
                            <p>User Name</p>
                        </td>
                        <td>06-02-2022</td>
                        <td><span class="status process">Process</span></td>
                    </tr>
                    <tr>
                        <td>
                            <img src="{{ asset('backend/images/avatar.png')}}">
                            <p>User Name</p>
                        </td>
                        <td>06-02-2022</td>
                        <td><span class="status pending">Pending</span></td>
                    </tr>
                    <tr>
                        <td>
                            <img src="{{ asset('backend/images/avatar.png')}}">
                            <p>User Name</p>
                        </td>
                        <td>06-02-2022</td>
                        <td><span class="status completed">Completed</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
        </div>
</main>
@endsection