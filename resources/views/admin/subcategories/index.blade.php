@extends('admin.admin_master')
@section('main')
    <main>
        <div class="head-title">
            <div class="left">
                <h2>Sub Categories</h2>
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
               
                <div class="table-data">
                    <div class="order">
                        <div class="head">
                            <h3>Sub Categories List</h3>
                        </div>
                        <table>
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Category</th>
                                    <th>Sub Category Name</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                @foreach ($subcategories as $subcategory)
                                    <tr>
                                        <th class="align-middle" scope="row">
                                            {{ $subcategories->firstItem() + $loop->index }}</th>
                                            <td>{{ $subcategory['Category']['category_name'] }}</td>
                                        <td>
                                            <p> {{ $subcategory->subcategory_name }}
                                            </p>
                                        </td>
                                        <td>{{ $subcategory->created_at->diffForHumans() }}</td>
                                        <td>
                                            <a href="{{ route('edit-subcategory', $subcategory->id)}}" class="btn btn-sm btn-info"
                                                style="background-color:var(--green);color:var(--light)"><i class='bx bxs-edit-alt' ></i> Edit</a>


                                            <a href="{{ route('delete-subcategory', $subcategory->id) }}" class="btn btn-sm btn-danger"><i class='bx bx-trash'></i> Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $subcategories->links() }}
                    </div>
                </div>
            </div>
            <div class="content-small">
                <form method="POST" id="upload-image" action="{{ route('add-subcategory') }}">
                    @csrf
                    <div class="form-group">
                        <label for="category">Category</label>
                        <select name="category_id" class="form-select form-select-sm mb-3 mt-3" aria-label=".form-select-lg example">
                            <option selected disabled>Choose Category</option>
                            @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                            @endforeach
                          </select>
                          @error('category_id')
                          <span class="text-danger">{{ $message }}</span>
                      @enderror
                        <label for="subcategory_name">Sub Category Name:</label>
                        <input type="text" class="form-control mt-3" id="subcategory_name" name="subcategory_name">
                        @error('subcategory_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                       
                    </div>
                    <button type="submit" class="btn-download">Add Sub Category</button>
                </form>
            </div>
            <div class="content-large">
               
                <div class="table-data">
                    <div class="order">
                        <div class="head">
                            <h3>Sub Categories Trash</h3>
                        </div>
                        <table>
                            <thead>
                                <tr class="text-center">
                                    <th>#</th>
                                    <th>Category</th>
                                    <th>Sub Category Name</th>
                                    <th>Deleted At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(count($subcategories_trash) > 0)
                                @foreach ($subcategories_trash as $subcategory)
                                    <tr class="text-center">
                                        <th class="align-middle text-center" scope="row">
                                            {{ $subcategories_trash->firstItem() + $loop->index }}</th>
                                            <td>{{ $subcategory['Category']['category_name'] }}</td>
                                        <td>
                                            <p> {{ $subcategory->subcategory_name }}
                                            </p>
                                        </td>
                                        <td>{{ $subcategory->deleted_at->diffForHumans() }}</td>
                                        <td>
                                            <a href="{{ route('restore-subcategory', $subcategory->id) }}" class="btn btn-sm btn-info"
                                                style="background-color:var(--green);color:var(--light)"><i class='bx bxs-edit-alt' ></i> Restore</a>
    
    
                                            <a href="{{ route('p-delete-subcategory', $subcategory->id) }}" class="btn btn-sm btn-danger"><i class='bx bx-trash'></i> Permanently Delete</a>
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
                        {{ $subcategories_trash->links() }}
                    </div>
                </div>
            </div>
        </div>
        
    </main>
@endsection
