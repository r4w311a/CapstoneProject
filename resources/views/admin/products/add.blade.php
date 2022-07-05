@extends('admin.admin_master')
@section('main')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


    <main>
        <div class="head-title">
            <div class="left">
                <h2>Add Product</h2>
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

                <form method="POST" enctype="multipart/form-data" id="upload-image" action="{{ route('store-product') }}">
                    @csrf
                    <div class="form-group">
                        <label for="category">Category</label>
                        <select required name="category_id" class="form-select form-select-sm mb-3 mt-3"
                            aria-label=".form-select-lg example">
                            <option selected disabled>Choose Category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">
                                    {{ $category->category_name }}</option>
                            @endforeach
                        </select>
                        @error('category_id')
                            <span class="text-danger">{{ $message }}</span>
                            <br>
                        @enderror
                        <label for="sub_category">Sub Category</label>
                        <select required name="subcategory_id" class="form-select form-select-sm mb-3 mt-3"
                            aria-label=".form-select-lg example">
                            <option selected disabled>Choose Sub Category</option>

                        </select>
                        @error('subcategory_id')
                            <span class="text-danger">{{ $message }}</span>
                            <br>
                        @enderror
                        <label for="product_name">Product Name:</label>
                        <input required type="text" class="form-control mb-3 mt-3" id="product_name" name="product_name">
                        @error('product_name')
                            <span class="text-danger">{{ $message }}</span>
                            <br>
                        @enderror
                        <label for="product_qty">Quantity:</label>
                        <input required type="number" class="form-control mb-3 mt-3" id="product_qty" name="product_qty">
                        @error('product_qty')
                            <span class="text-danger">{{ $message }}</span>
                            <br>
                        @enderror
                        <label for="product_color">Product Color:</label>
                        <input id="product_color" name='product_color' value="" data-role="tagsinput" class="form-control mb-3 mt-3">
                        @error('product_color')
                            <span class="text-danger">{{ $message }}</span>
                            <br>
                        @enderror
                        <br>
                        <label for="product_size">Product Size:</label>
                        <input id="product_size" name='product_size' value="" data-role="tagsinput"
                            class="form-control mb-3 mt-3">
                        @error('product_size')
                            <span class="text-danger">{{ $message }}</span>
                            <br>
                        @enderror
<br>
                        <label for="selling_price">Price:</label>
                        <input required type="number" class="form-control mb-3 mt-3" id="selling_price" name="selling_price">
                        @error('selling_price')
                            <span class="text-danger">{{ $message }}</span>
                            <br>
                        @enderror


                        <label class="form-label" for="product_thumbnail">Product Thumbnail:</label>
                        <input required type="file" class="form-control" id="product_thumbnail" name="product_thumbnail" />

                        @error('product_thumbnail')
                            <span class="text-danger">{{ $message }}</span>
                            <br>
                        @enderror

                        <!--
                            <label class="form-label" for="multi_imgs">Product Images:</label>
                        <input type="file" class="form-control" id="multi_imgs" name="multi_imgs[]" multiple />

                        
                        -->
                        <label for="description">Description:</label>
                        <textarea required type="text" class="form-control mb-3 mt-3" id="description" name="description"></textarea>
                        @error('description')
                            <span class="text-danger">{{ $message }}</span>
                            <br>
                        @enderror

                        <input class="form-check-input" type="checkbox" value="1" id="new_arrivals" name="new_arrivals">
                        <label class="form-check-label mr-5" for="new_arrivals">
                            New Arrivals
                        </label>
                        <input class="form-check-input" type="checkbox" value="1" id="featured" name="featured">
                        <label class="form-check-label mr-5" for="featured">
                            Featured
                        </label>
                      

                    </div>
                    <button type="submit" class="btn-download">Add Product</button>
                </form>




            </div>
        </div>
    </main>

    <script type="text/javascript">
        $(document).ready(function() {
            $('select[name="category_id"]').on('change', function() {
                var category_id = $(this).val();
                if (category_id) {
                    $.ajax({
                        url: "{{ url('admin/products/ajax') }}/" + category_id,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            var d = $('select[name="subcategory_id"]').empty();
                            $.each(data, function(key, value) {
                                $('select[name="subcategory_id"]').append(
                                    '<option value="' + value.id + '">' + value
                                    .subcategory_name + '</option>');
                            });
                        },
                    });
                } else {
                    alert('danger');
                }
            });


        });
    </script>
@endsection
