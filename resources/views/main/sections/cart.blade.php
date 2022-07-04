@extends('main.master')
@section('productDetails')
@section('title')
    Your Cart
@endsection

<main>
    <div class="container cart">
        <h1>Your Cart</h1>
        <br>
        <table>
            <tr>
                <th>Product</th>
                <th>Color</th>
                <th>Size</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>
           
            @foreach ($cart_items as $item)
                <tr>
                    <td>
                        <div class="cart-info">
                            <img src="{{ asset('uploads/products/thumbnails/' . $item->options->image) }}"
                                alt="" />
                            <div>
                                <p>{{ $item->name }}</p>
                                <span>Price : {{ $item->price }}$ </span> <br />

                                <form class="form" action="{{ route('cart.remove') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="rowId" value="{{ $item->rowId }}" />
                                    <button type="submit" class="btn-option">Remove</button>
                                </form>
                            </div>
                        </div>
                    </td>
                    
                    <td>{{$item->options->color}}</td>
                    <td>{{$item->options->size}}</td>
                        <form class="new-form" action="{{ route('cart.updateQty') }}" method="POST">
                            @csrf
                           
                            <td>
                                <input type="hidden" name="rowId" value="{{ $item->rowId }}" />

                                <button type="submit" name="decrease" class="value-button" id="decrease"
                                    value="1">-</button>
                                <input name="quantity" type="number" id="number" value="{{ $item->qty }}" />
                                <button type="submit" name="increase" class="value-button" id="increase"
                                    value="1">+</button>
                            </td>

                        </form>

                        <td>{{ $item->price * $item->qty }}$</td>
                </tr>

               
            @endforeach


        </table>
        <div class="total-price">
            <table>
                <tr>
                    <td>Subtotal</td>
                    <td>{{ Cart::subtotal() }}$</td>
                </tr>
                <tr>
                    <td>Tax</td>
                    <td>{{ Cart::tax() }}$</td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td>{{ Cart::total() }}$</td>
                </tr>
            </table>
            <a href="{{url('/checkout')}}" class="checkout btn">Proceed To Checkout</a>
        </div>
    </div>

    <!-- Latest Products -->
    <section class="section featured">
        
        <div class="top container">
            <h1>Latest Products</h1>
            <a href="#" class="view-more">View more</a>
        </div>
        <div class="product-center container">
            @foreach ($latest as $product)
                <div class="product-item">
                    <div class="overlay">
                        <a href="" class="product-thumb">
                            <img src="{{ asset('uploads/products/thumbnails/' . $product->product_thumbnail) }}"
                                alt="" />
                        </a>
                        
                    </div>
                    <div class="product-info">
                        <span>MEN'S CLOTHES</span>
                        <a
                            href="{{ url('/product/details/' . $product->id) . '/' . $product->product_slug }}">{{ $product->product_name }}</a>
                        <h4>{{ $product->selling_price }}$</h4>
                    </div>
                    <ul class="icons">
                        <a href="{{ url('/product/details/'. $product->id).'/' . $product->product_slug}}"><li><i class='bx bxs-show'></i></li></a>
                        <li><i class="bx bx-cart"></i></li>
                    </ul>
                </div>
            @endforeach
        </div>
    </section>

</main>
@endsection
