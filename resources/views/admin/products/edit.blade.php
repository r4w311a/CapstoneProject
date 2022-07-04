@extends('admin.admin_master')
@section('main')



    <main>
        <div class="head-title">
            <div class="left">
                <h2>Edit Product</h2>
                <ul class="breadcrumb">
                    <li>
                        <a href="{{ route('view-products') }}">Products</a>
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

                <form method="POST" enctype="multipart/form-data" id="upload-image"
                            action="{{ route('update-product', $product->id) }}">
                                        @csrf
                    <div class="form-group">
                        <label for="category">Category</label>
                        <select required name="category_id" class="form-select form-select-sm mb-3 mt-3"
                        aria-label=".form-select-lg example">
                        <option selected disabled>Choose Category</option>
                        @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ $category->id == $product->category_id ? 'selected' : '' }}>
                            {{ $category->category_name }}</option>
                    @endforeach
                    </select>
                        @error('category_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <label for="sub_category">Sub Category</label>
                        <select required name="subcategory_id" class="form-select form-select-sm mb-3 mt-3"
                            aria-label=".form-select-lg example">
                            <option selected disabled>Choose Sub Category</option>
                            @foreach ($subcategories as $subcategory)
                            <option value="{{ $subcategory->id }}" {{ $subcategory->id == $product->subcategory_id ? 'selected' : '' }}>
                                {{ $subcategory->subcategory_name }}</option>
                        @endforeach
                        </select>
                        @error('subcategory_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <label for="product_name">Product Name:</label>
                        <input required type="text" value="{{ $product->product_name }}" class="form-control mb-3 mt-3" id="product_name" name="product_name">
                        @error('product_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <label for="product_qty">Quantity:</label>
                        <input required type="text" value="{{ $product->product_qty }}" class="form-control mb-3 mt-3" id="product_qty" name="product_qty">
                        @error('product_qty')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <label for="product_color">Product Color:</label>
                        <input id="product_color" name='product_color' value="Black,White,Red" data-role="tagsinput" class="form-control mb-3 mt-3">
                        @error('product_color')
                            <span class="text-danger">{{ $message }}</span>
                            <br>
                        @enderror
                        <br>
                        <label for="product_size">Product Size:</label>
                        <input id="product_size" name='product_size' value="Small,Medium,Large" data-role="tagsinput"
                            class="form-control mb-3 mt-3">
                        @error('product_size')
                            <span class="text-danger">{{ $message }}</span>
                            <br>
                        @enderror

                        <label for="selling_price">Price:</label>
                        <input required type="text" value="{{ $product->selling_price }}" class="form-control mb-3 mt-3" id="selling_price" name="selling_price">
                        @error('selling_price')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        

                        <label class="form-label" for="product_thumbnail">Product Thumbnail: (not required)</label>
                        <input type="file" value="asdasd" class="form-control" id="product_thumbnail" name="product_thumbnail" />

                        @error('product_thumbnail')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                       

                        <label for="description">Description:</label>
                        <textarea required type="text" class="form-control mb-3 mt-3" id="description" name="description">{{ $product->description }}</textarea>
                        @error('description')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                        <input class="form-check-input" {{ $product->new_arrivals == 1 ? 'checked' : '' }} type="checkbox" value="1" id="new_arrivals" name="new_arrivals">
                        <label class="form-check-label mr-5" for="new_arrivals">
                            New Arrivals
                        </label>
                        <input class="form-check-input" {{ $product->featured == 1 ? 'checked' : '' }} type="checkbox" value="1" id="featured" name="featured">
                        <label class="form-check-label mr-5" for="featured">
                            Featured
                        </label>
                       



                    </div>
                    <button type="submit" class="btn-download">Edit Product</button>
                </form>




            </div>
        </div>
    </main>

@endsection
