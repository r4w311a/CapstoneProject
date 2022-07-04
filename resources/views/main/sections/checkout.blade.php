@extends('main.master')
@section('productDetails')
@section('title')
    Checkout
@endsection

<main>
    <section>

       
        <div class="check-row">
            
            <div class="col-75">
                <h2>Checkout</h2>
                <br>
                <div class="check-container">
                    

                    <form class="form" action="{{ route('store.checkout') }}" method="POST">
                        @csrf
                        <div class="check-row">
                            <div class="col-50">
                                <h3>Billing Address</h3>
                                <label for="name"><i class="bx bx-user"></i> Full Name</label>
                                <input required type="text" id="name" name="name" value="{{$authenticatedUser->name}}" >
                                <label for="email"><i class="bx bx-envelope"></i> Email</label>
                                <input required type="text" id="email" name="email" value="{{$authenticatedUser->email}}" readonly>
                                <label for="phone"><i class='bx bx-phone'></i> Phone</label>
                                <input required type="text" id="phone" name="phone" placeholder="07">

                                <label for="country"><i class='bx bx-current-location'></i> Country</label>
                                

                                <select required id="country" name="country">
                                    <option selected disabled>-- Select Country -- </option>
                                        <option value="Jordan">Jordan</option>
                                </select>

                                <label for="city"><i class='bx bxs-edit-location'></i>City</label>
                                <input required type="text" id="city" name="city" placeholder="i.e Amman">

                                <label for="address"><i class='bx bxs-edit-location'></i> Address</label>
                                <input required type="text" id="address" name="address" placeholder="i.e 542 W. 15th Street">

                              
                                    <h3>Payment Method:</h3>
                                    <input required name="payment_method" type="radio" value="cash" checked> Cash On Delivery
                                   
                               
                            </div>

                        </div>
                            <div class="floating">
                              
                                <br>
                                <input type="submit" value="Continue to checkout" class="btn-option">
                            </div>
                       
                  
                </div>
            </div>

            <div class="col-25">
                <h2></h2>
                <br>
                <div class="check-container">
                    <h4>Cart Summary
                        <span class="price" style="color:black">
                            <i class="bx bx-cart"></i>
                            <b>{{$cart_items->count()}}</b>
                        </span>
                    </h4>
                    @foreach ($cart_items as $item)
                    <p><a href="#">{{$item->name}}</a> <span class="price">{{$item->price}}$ * {{$item->qty}}</span></p>
                    @endforeach
                    <hr>
                    <p>Sub Total <span class="price" style="color:black"><b>{{ Cart::subtotal() }}$</b></span></p>
                    <p>Tax <span class="price" style="color:black"><b>{{ Cart::tax() }}$</b></span></p>
                    <p>Total <span class="price" style="color:black"><b>{{ Cart::total() }}$</b></span></p>

                    <input type="submit" value="Checkout" class="btn-option">

                </form>
                </div>
            </div>
        </div>

    </section>

</main>
@endsection
