@extends('admin.admin_master')
@section('main')
    <main>
        <div class="head-title">
            <div class="left">
                <h2>Settings</h2>
                <ul class="breadcrumb">
                    <li>
                        <a href="#">Settings</a>
                    </li>
                    <li><i class="bx bx-chevron-right"></i></li>
                    <li>
                        <a href="#" class="active">Home</a>
                    </li>
                </ul>
            </div>
        </div>



        <ul class="box-info ">
            <li>
                <i class='bx bxs-user-account'></i>
                <span class="text">
                    <h3>Name: {{ $adminData->name }}</h3>
                    <p>E-mail: {{ $adminData->email }} </p>
                </span>


            </li>

        </ul>

    </main>
@endsection
