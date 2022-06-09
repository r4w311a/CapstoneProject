@extends('admin.admin_master')
@section('main')
    <main>
        <div class="head-title">
            <div class="left">
                <h2>Edit Category</h2>
                <ul class="breadcrumb">
                    <li>
                        <a href="{{ route('view-categories') }}">Categories</a>
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
        <div class="myContainer">
           
            <div class="content-large">
                <form method="POST" id="upload-image" action="{{ route('update-category' , $category->id) }}">
                    @csrf
                    <div class="form-group">
                        <label for="category_name">Category Name:</label>
                        <input type="text" value="{{ $category->category_name }}" class="form-control mt-3" id="category_name" name="category_name">
                        @error('category_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <label class="mt-3" for="category_icon">Category Icon:</label>
                        <input type="text" value="{{ $category->category_icon }}" class="form-control mt-3" id="category_icon" name="category_icon">
                        @error('category_icon')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <button type="submit" class="btn-download">Update Category</button>
                </form>
            </div>
        </div>
    </main>
@endsection
