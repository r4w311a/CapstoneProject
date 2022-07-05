@extends('main.master')
@section('productDetails')
@section('title')
    {{ $product->product_name }}
@endsection

<main>
    <section class="section product-detail">
        <div class="details container">
            <div class="left image-container">
                <div class="main">
                    <img src="{{Storage::disk('s3')->url('products/' . $product->product_thumbnail)}}" id="zoom"
                        alt="" />
                </div>
            </div>
            <div class="right">
              @if (session('success'))
                {{ session('success') }}
              @endif
                <span>{{$subcategory->Category->category_name }} / {{$product->subcategory->subcategory_name}}</span>
                <h1 id="pname">{{ $product->product_name }}</h1>
                <div class="price">{{ $product->selling_price }}$</div>

                <form class="form" action="{{ route('cart.store') }}" method="POST">
                    @csrf
                    @if ($product->product_color == null)
                    @else
                        <label>Color: </label>
                        <select required name="color">
                           
                            @foreach ($product_color as $color)
                                <option selected value="{{ $color }}">{{ $color }}</option>
                            @endforeach
                        </select>
                    @endif
                    <br>
                    @if ($product->product_size == null)
                    @else
                        <label>Size: </label>
                        <select required name="size">
                            
                            @foreach ($product_size as $size)
                                <option selected value="{{ $size }}">{{ $size }}</option>
                            @endforeach
                        </select>
                    @endif
                    <br>

                    <label>Quantity: </label>
                    <input required type="number" name="quantity" value="1" min="1" />

                   



                    <input type="hidden" name="product_id" value="{{ $product->id }}" />

                    @if ($cart->where('id', $product->id)->count())
                        <button type="submit" class="addCart disabled" disabled>In Cart</button>
                    @else
                    <button type="submit" class="addCart">Add To Cart</button>
                    @endif
                    <br>
                    <h3>Product Detail</h3>
                    <p>
                        {{ $product->description }}
                    </p>
                </form>
            </div>
        </div>
    </section>

    <!-- Related -->
    <section class="section featured">
        <div class="top container">
            <h1>Related Products</h1>
            <a href="{{url('category/'.$product->subcategory_id)}}" class="view-more">View more</a>
        </div>
        <div class="product-center container">
            @foreach ($related as $product)
                <div class="product-item">
                    <div class="overlay">
                        <a href="{{ url('/product/details/'. $product->id).'/' . $product->product_slug}}" class="product-thumb">
                            <img src="{{Storage::disk('s3')->url('products/' . $product->product_thumbnail)}}"
                                alt="" />
                        </a>
                        
                    </div>
                    <div class="product-info">
                        <span>{{$subcategory->Category->category_name }} | {{$product->subcategory->subcategory_name}}</span>
                        <a
                            href="{{ url('/product/details/' . $product->id) . '/' . $product->product_slug }}">{{ $product->product_name }}</a>
                        <h4>{{ $product->selling_price }}$</h4>
                    </div>
                    <ul class="icons">
                        <a href="{{ url('/product/details/'. $product->id).'/' . $product->product_slug}}"><li><i class='bx bxs-show'></i></li></a>
                        
                    </ul>
                </div>
            @endforeach
        </div>
    </section>
</main>


@endsection
