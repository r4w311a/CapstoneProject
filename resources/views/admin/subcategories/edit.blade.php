@extends('admin.admin_master')
@section('main')
    <main>
        <div class="head-title">
            <div class="left">
                <h2>Edit Sub Category</h2>
                <ul class="breadcrumb">
                    <li>
                        <a href="{{ route('view-subcategories') }}">Sub Categories</a>
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
                <form method="POST" id="upload-image" action="{{ route('update-subcategory' , $subcategory->id) }}">
                    @csrf
                    <div class="form-group">
                        <label for="category">Category</label>
                        <select name="category_id" class="form-select form-select-sm mb-3 mt-3" aria-label=".form-select-lg example">
                            <option selected disabled>Choose Category</option>
                            @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ $category->id == $subcategory->category_id ? 'selected' : '' }} >{{ $category->category_name }}</option>
                            @endforeach
                          </select>
                        @error('category_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                        <label for="subcategory_name">Category Name:</label>
                        <input type="text" value="{{ $subcategory->subcategory_name }}" class="form-control mt-3" id="subcategory_name" name="subcategory_name">
                        @error('subcategory_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                       
                    </div>
                    <button type="submit" class="btn-download">Update Category</button>
                </form>
            </div>
        </div>
    </main>
@endsection
