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
                    <form class="form" action="{{ route('order.checkout') }}" method="POST">
                        @csrf

                        <div class="check-row">
                            <div class="col-50">
                                <h3>Billing Address</h3>
                                <label for="name"><i class="bx bx-user"></i> Full Name</label>
                                <input type="text" id="name" name="name" readonly
                                    value="{{ $data['name'] }}">
                                <label for="email"><i class="bx bx-envelope"></i> Email</label>
                                <input type="text" id="email" name="email" value="{{ $data['email'] }}"
                                    readonly>
                                <label for="phone"><i class='bx bx-phone'></i> Phone</label>
                                <input type="text" id="phone" name="phone" readonly
                                    value="{{ $data['phone'] }}" placeholder="07">

                                <label for="country"><i class='bx bx-current-location'></i> Country</label>


                                <select id="country" name="country">
                                    <option selected disabled>-- Select Country -- </option>
                                    <option value="Jordan" selected readonly>Jordan</option>
                                </select>

                                <label for="city"><i class='bx bxs-edit-location'></i>City</label>
                                <input type="text" id="city" readonly name="city" value="{{ $data['city'] }}"
                                    placeholder="i.e Amman">

                                <label for="address"><i class='bx bxs-edit-location'></i> Address</label>
                                <input type="text" id="address" readonly name="address"
                                    value="{{ $data['address'] }}" placeholder="i.e 542 W. 15th Street">




                            </div>

                        </div>



                </div>
            </div>

            <div class="col-25">
                <h2>Place your order</h2>
                <br>
                <div class="check-container">


                   
                    <div class="form-row">
                        <label for="card-element">
                            Total price: {{ $total }}$
                        </label>

                        <div id="card-element">
                            <!-- A Stripe Element will be inserted here. -->
                        </div>
                        <!-- Used to display form errors. -->
                        <div id="card-errors" role="alert"></div>
                    </div>
                    <br>
                    <button type="submit" class="btn-option">Confirm Order</button>
                   

                </div>
            </form>
            </div>
        </div>
        </div>



    </section>
</main>

@endsection
