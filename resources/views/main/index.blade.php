@extends('main.master')
@section('content')
@section('title')
Malkawi eCommerce
@endsection
<div class="slider">
  <div class="container">
    <div class="slider-container has-scrollbar">
      <div class="slider-item">
        <img
          src="{{ asset('images/products/pic-1.jpg') }}"
          alt="women's latest fashion sale"
          class="slider-img"
        />

        <div class="slider-content">
          <p class="slider-subtitle">Trending item</p>
          <h2 class="slider-title">Women's latest Sweaters sale</h2>

          <a href="{{url('category/7')}}" class="slider-btn">Shop now</a>
        </div>
      </div>

      <div class="slider-item">
        <img
          src="{{ asset('images/products/pic-2.png') }}"
          alt="modern sunglasses"
          class="slider-img"
        />

        <div class="slider-content">
          <p class="slider-subtitle">Trending </p>

          <h2 class="slider-title">Men Jeans</h2>
          

          <a href="{{url('category/22')}}" class="slider-btn">Shop now</a>
        </div>
      </div>

      <div class="slider-item">
        <img
          src="{{ asset('images/products/pic-3.jpg') }}"
          alt="new fashion summer sale"
          class="slider-img"
        />

        <div class="slider-content">
          <p class="slider-subtitle">Sale Offer</p>

          <h2 class="slider-title">New Kids Bags</h2>

          <a href="{{url('category/18')}}" class="slider-btn">Shop now</a>
        </div>
      </div>
    </div>
  </div>
</div>




<!-- New Arrivals -->
<section class="section new-arrival">
  <div class="title">
    <h1>NEW ARRIVALS</h1>
   
  </div>

  <div class="product-center">
@foreach ($new_arrivals as $product)

    <div class="product-item">
      

      <div class="overlay">
        <a href="" class="product-thumb">
          <img href="" src="{{Storage::disk('s3')->url('products/' . $product->product_thumbnail)}}" alt="" />
        </a>
      </div>
      <div class="product-info">

        <a href="{{ url('/product/details/'. $product->id).'/' . $product->product_slug}}">{{$product->product_name}}</a>
        <h4>{{$product->selling_price}}$</h4>
      </div>
      <ul class="icons">
        <a href="{{ url('/product/details/'. $product->id).'/' . $product->product_slug}}"><li><i class='bx bxs-show'></i></li></a>
       
        
      </ul>
    </div>
    
@endforeach
      
      
  </div>
</section>






<!-- Featured -->

<section class="section new-arrival">
  <div class="title">
    <h1>Featured</h1>
    
  </div>

  <div class="product-center">

    @foreach ($featured as $product)
    <div class="product-item">
      <div class="overlay">
        <a href="{{ url('/product/details/'. $product->id).'/' . $product->product_slug}}" class="product-thumb">
          <img src="{{Storage::disk('s3')->url('products/' . $product->product_thumbnail)}}" alt="" />
        </a>
      </div>
      <div class="product-info">
        <a href="{{ url('/product/details/'. $product->id).'/' . $product->product_slug}}">{{$product->product_name}}</a>
        <h4>{{$product->selling_price}}$</h4>
      </div>
      <ul class="icons">
        
        <a href="{{ url('/product/details/'. $product->id).'/' . $product->product_slug}}"><li><i class='bx bxs-show'></i></li></a>
        
        
      </ul>
    </div>
    @endforeach

</section>



@endsection