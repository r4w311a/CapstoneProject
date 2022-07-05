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
    </div>
    
        <div class="myContainer">
           
            <div class="content-large">
                
                <span class="text">
                    <h3>Change Password</h3>
                    @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                
                @endif
                </span>
                <form method="POST" enctype="multipart/form-data" id="upload-image" action="{{ route('store-product') }}">
                    @csrf
                    
                    <div class="form-group">
                       
                        <label for="current_password">Current Password:</label>
                        <input required type="password" class="form-control mb-3 mt-3" id="current_password" name="oldpassword">
                        @error('oldpassword')
                            <span class="text-danger">{{ $message }}</span>
                            <br>
                        @enderror
                        <label for="password">New Password:</label>
                        <input required type="password" class="form-control mb-3 mt-3" id="password" name="password">
                        @error('password')
                            <span class="text-danger">{{ $message }}</span>
                            <br>
                        @enderror
                        <label for="password_confirmation">Confirm Password:</label>
                        <input required type="password" class="form-control mb-3 mt-3" id="password_confirmation" name="password_confirmation">
                        @error('password_confirmation')
                            <span class="text-danger">{{ $message }}</span>
                            <br>
                        @enderror
 
                    </div>
                    <button type="submit" class="btn-download">Change Password</button>
                </form>




            </div>
        </div>

    </main>
@endsection
