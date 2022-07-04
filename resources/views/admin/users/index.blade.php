@extends('admin.admin_master')
@section('main')
    <main>
        <div class="head-title">
            <div class="left">
                <h2>Users</h2>
                <ul class="breadcrumb">
                    <li>
                        <a href="{{ route('view-users') }}">Users</a>
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
                            <h3>All Users</h3>
                        </div>
                        <table>
                            <thead>
                                <tr class="text-center">
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>E-mail</th>
                                    <th>Registerd date</th>
                                    
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>



                                @foreach ($users as $user)

                                <tr class="text-center align-middle">
                                    <th class="align-middle" scope="row">
                                        {{ $users->firstItem() + $loop->index }}</th>
                                    </th>
                                    <td class="align-middle">{{$user->name}}</td>
                                    <td style="color:brown" class="align-middle">{{$user->email}}</td>
                                    <td class="align-middle">{{$user->created_at->format('d F Y')}}</td>
                                    
                                    <td class="align-middle">
                                        <a href="{{route('user_orders',$user->id)}}" class="btn btn-sm btn-info">View</a>

                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                        {{ $users->links() }}
                    </div>
                </div>
            </div>

           
        </div>

    </main>
@endsection
