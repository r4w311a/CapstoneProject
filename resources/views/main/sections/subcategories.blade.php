@extends('main.master')
@section('productDetails')
@section('title')
{{$subcategory->subcategory_name}}
@endsection

    <main>
        <section class="section all-products" id="products">
            <div class="top container">
              <h1>{{$subcategory->subcategory_name}}</h1>
              <br>
              <div class="sorting"><span>Sort By:</span>
                <a href="{{URL::current()}}">All</a>
                <a href="{{URL::current() . "?sort=price_asc" }}">Price: Low to High</a>
                <a href="{{URL::current() . "?sort=price_desc" }}">Price: High to Low</a>
                <a href="{{URL::current() . "?sort=newest" }}">Newest</a>
                <a href="{{URL::current() . "?sort=older" }}">Older</a>
              </div>
            </div>
            <div class="product-center container">
                 @if(count($products) > 0)
                @foreach ($products as $product)

                <div class="product-item">
                  <div class="overlay">
                    <a href="{{ url('/product/details/'. $product->id) }}" class="product-thumb">
                      <img src="{{ asset('uploads/products/thumbnails/' . $product->product_thumbnail) }}" alt="" />
                    </a>
                  </div>
                  <div class="product-info">
                    <span>{{$subcategory->Category->category_name }} | {{$product->subcategory->subcategory_name}}</span>
                    <a href="{{ url('/product/details/'. $product->id).'/' . $product->product_slug}}">{{$product->product_name}}</a>
                    <h4>{{$product->selling_price}}$</h4>
                  </div>
                  <ul class="icons">
                    <a href="{{ url('/product/details/'. $product->id).'/' . $product->product_slug}}"><li><i class='bx bxs-show'></i></li></a>
                    <li><i class="bx bx-heart"></i></li>
                  </ul>
                </div>
                @endforeach
                @else 
                <div class="alert alert-danger">
                    <strong>No Product Found</strong>
                </div>
                @endif

            </div>
           
        </section>
         
    </main>
    
   
@endsection
