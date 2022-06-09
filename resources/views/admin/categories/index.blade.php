@extends('admin.admin_master')
@section('main')
    <main>
        <div class="head-title">
            <div class="left">
                <h2>Categories</h2>
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
               
                <div class="table-data">
                    <div class="order">
                        <div class="head">
                            <h3>All Categories</h3>
                        </div>
                        <table>
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Category Name</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr>
                                        <th class="align-middle" scope="row">
                                            {{ $categories->firstItem() + $loop->index }}</th>
                                        <td>
                                            <p><i class='{{ $category->category_icon }}'></i> {{ $category->category_name }}
                                            </p>
                                        </td>
                                        <td>{{ $category->created_at->diffForHumans() }}</td>
                                        <td>
                                            <a href="{{ route('edit-category', $category->id)}}" class="btn btn-sm btn-info"
                                                style="background-color:var(--green);color:var(--light)"><i class='bx bxs-edit-alt' ></i> Edit</a>


                                            <a href="{{ route('delete-category', $category->id) }}" class="btn btn-sm btn-danger"><i class='bx bx-trash'></i> Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $categories->links() }}
                    </div>
                </div>
            </div>
            <div class="content-small">
                <form method="POST" id="upload-image" action="{{ route('add-category') }}">
                    @csrf
                    <div class="form-group">
                        <label for="category_name">Category Name:</label>
                        <input type="text" class="form-control mt-3" id="category_name" name="category_name">
                        @error('category_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <label class="mt-3" for="category_icon">Category Icon:</label>
                        <input type="text" class="form-control mt-3" id="category_icon" name="category_icon">
                        @error('category_icon')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <button type="submit" class="btn-download">Add Category</button>
                </form>
            </div>
            <div class="content-large">
               
                <div class="table-data">
                    <div class="order">
                        <div class="head">
                            <h3>Categories Trash</h3>
                        </div>
                        <table>
                            <thead>
                                <tr class="text-center">
                                    <th>#</th>
                                    <th>Category Name</th>
                                    <th>Deleted At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(count($categories_trash) > 0)
                                @foreach ($categories_trash as $category)
                                    <tr class="text-center">
                                        <th class="align-middle text-center" scope="row">
                                            {{ $categories->firstItem() + $loop->index }}</th>
                                        <td>
                                            <p><i class='{{ $category->category_icon }}'></i> {{ $category->category_name }}
                                            </p>
                                        </td>
                                        <td>{{ $category->deleted_at->diffForHumans() }}</td>
                                        <td>
                                            <a href="{{ route('restore-category', $category->id) }}" class="btn btn-sm btn-info"
                                                style="background-color:var(--green);color:var(--light)"><i class='bx bxs-edit-alt' ></i> Restore</a>
    
    
                                            <a href="{{ route('p-delete-category', $category->id) }}" class="btn btn-sm btn-danger"><i class='bx bx-trash'></i> Permanently Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                                @else
                                            <tr>
                                                <td class="text-center" colspan="10">No Data To Show</td>
                                            </tr>
                                        @endif
                            </tbody>
                        </table>
                        {{ $categories->links() }}
                    </div>
                </div>
            </div>
        </div>
        
    </main>
@endsection
