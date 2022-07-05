@extends('admin.admin_master')
@section('main')
    <main>
        <div class="head-title">
            <div class="left">
                <h2>Products</h2>
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
            <a href="{{ route('add-product') }}" class="btn-download">
                <i class='bx bx-plus'></i>
                <span class="text">Add Product</span>
            </a>

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
                            <h3>Products List ({{ $products->count() }})</h3>
                        </div>
                        <table>
                            <thead>
                                <tr class="text-center">
                                    <th>#</th>
                                    <th>Product Name</th>
                                    <th>Product Image</th>
                                    <th>Product Category</th>
                                    <th>Sub Category</th>
                                    <th>Product Price</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>



                                @foreach ($products as $product)
                                    <tr class="text-center align-middle">
                                        <th class="align-middle" scope="row">
                                            {{ $products->firstItem() + $loop->index }}</th>
                                        <td class="align-middle">{{ $product->product_name }}</td>
                                        <td class="align-middle"><img
                                                src="{{Storage::disk('s3')->url('products/' . $ImageName)}}"
                                                class="img-thumbnail mx-auto " style="width:80px;height:80px" />
                                        </td>
                                        <td class="align-middle">{{ $product->category->category_name }}</td>
                                        <td class="align-middle">{{ $product->subcategory->subcategory_name }}
                                        <td class="align-middle">{{ $product->selling_price . '$' }}</td>
                                        </td>
                                        <td class="align-middle">
                                            <a href="{{ route('edit-product', $product->id) }}"
                                                class="btn btn-sm btn-info">Edit</a>


                                            <a href="{{ route('delete-product', $product->id) }}"
                                                class="btn btn-sm btn-danger">Delete</a>
                                        </td>
                                @endforeach

                            </tbody>
                            {{$products->links()}}
                        </table>

                    </div>
                </div>
            </div>

            <div class="content-large">
                <div class="table-data">
                    <div class="order">
                        <div class="head">
                            <h3>Products Trash</h3>
                        </div>
                        <table>
                            <thead>
                                <tr class="text-center">
                                    <th>#</th>
                                    <th>Product Name</th>
                                    <th>Product Image</th>
                                    <th>Product Quantity</th>
                                    <th>Product Price</th>
                                    <th>Deleted At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>



                                @foreach ($products_trash as $product)
                                    <tr class="text-center align-middle">
                                        <th class="align-middle" scope="row">
                                            {{ $products->firstItem() + $loop->index }}</th>
                                        <td class="align-middle">{{ $product->product_name }}</td>
                                        <td class="align-middle"><img
                                                src="{{ asset('uploads/products/thumbnails/' . $product->product_thumbnail) }}"
                                                class="img-thumbnail mx-auto " style="width:80px;height:80px" />
                                        </td>
                                        <td class="align-middle">{{ $product->product_qty }}</td>
                                        <td class="align-middle">{{ $product->selling_price . '$' }}</td>
                                        <td class="align-middle">{{ $product->deleted_at->diffForHumans() }}
                                        </td>
                                        <td class="align-middle">
                                            <a href="{{ route('restore-product', $product->id) }}"
                                                class="btn btn-sm btn-info">Restore</a>


                                            <a href="{{ route('p-delete-product', $product->id) }}"
                                                class="btn btn-sm btn-danger">Permanently Delete</a>
                                @endforeach

                            </tbody>

                        </table>

                    </div>
                </div>
            </div>
    </main>
    
@endsection
