@extends('main.master')
@section('productDetails')
@section('title')
    Stripe Checkout
@endsection
<style>
    /**
 * The CSS shown here will not be introduced in the Quickstart guide, but shows
 * how you can use CSS to style your Element's container.
 */
.StripeElement {
  box-sizing: border-box;
  height: 40px;
  padding: 10px 12px;
  border: 1px solid transparent;
  border-radius: 4px;
  background-color: white;
  box-shadow: 0 1px 3px 0 #e6ebf1;
  -webkit-transition: box-shadow 150ms ease;
  transition: box-shadow 150ms ease;
}
.StripeElement--focus {
  box-shadow: 0 1px 3px 0 #cfd7df;
}
.StripeElement--invalid {
  border-color: #fa755a;
}
.StripeElement--webkit-autofill {
  background-color: #fefde5 !important;}
</style>
<main>
    <section>

        <div class="check-row">
            
            <div class="col-75">
                <h2>Checkout</h2>
                <br>
                <div class="check-container">
                    

                    
                        <div class="check-row">
                            <div class="col-50">
                                <h3>Billing Address</h3>
                                <label for="name"><i class="bx bx-user"></i> Full Name</label>
                                <input type="text" id="name" name="name" readonly value="{{$data['name']}}" >
                                <label for="email"><i class="bx bx-envelope"></i> Email</label>
                                <input type="text" id="email" name="email" value="{{$data['email']}}" readonly>
                                <label for="phone"><i class='bx bx-phone'></i> Phone</label>
                                <input type="text" id="phone" name="phone" readonly value="{{$data['phone']}}" placeholder="07">

                                <label for="country"><i class='bx bx-current-location'></i> Country</label>
                                

                                <select id="country" name="country">
                                    <option selected disabled>-- Select Country -- </option>
                                        <option value="Jordan" selected readonly>Jordan</option>
                                </select>

                                <label for="city"><i class='bx bxs-edit-location'></i>City</label>
                                <input type="text" id="city" readonly name="city" value="{{$data['city']}}" placeholder="i.e Amman">

                                <label for="address"><i class='bx bxs-edit-location'></i> Address</label>
                                <input type="text" id="address" readonly name="address" value="{{$data['address']}}" placeholder="i.e 542 W. 15th Street">

                              
                                    
                               
                            </div>

                        </div>
                        
                       
                  
                </div>
            </div>

            <div class="col-25">
                <h2>Place your order</h2>
                <br>
                <div class="check-container">

                    <form action="{{route('stripe.order')}}" method="post" id="payment-form">
                        @csrf
                    <div class="form-row">
                        <label for="card-element">
                        Credit or debit card
                        </label>
                         
                        <div id="card-element">
                        <!-- A Stripe Element will be inserted here. -->
                        </div>
                        <!-- Used to display form errors. -->
                        <div id="card-errors" role="alert"></div>
                    </div>
                    <br>
                    <button class="btn-option">Confirm Order</button>
                    </form>

                </div>
                
                </div>
            </div>
        </div>



    </section>
</main>
<script type="text/javascript">
    // Create a Stripe client.
var stripe = Stripe('pk_test_51LHWZGDVss7Jf18zSrjDTUYkFbeqEpMiClqDHDnQ9KbBOUcZ487LIaetzkLTLWP2k5P55Gqe1RrM7myfcLr53Pw100YCR3YnSe');
// Create an instance of Elements.
var elements = stripe.elements();
// Custom styling can be passed to options when creating an Element.
// (Note that this demo uses a wider set of styles than the guide below.)
var style = {
  base: {
    color: '#32325d',
    fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
    fontSmoothing: 'antialiased',
    fontSize: '16px',
    '::placeholder': {
      color: '#aab7c4'
    }
  },
  invalid: {
    color: '#fa755a',
    iconColor: '#fa755a'
  }
};
// Create an instance of the card Element.
var card = elements.create('card', {style: style});
// Add an instance of the card Element into the `card-element` <div>.
card.mount('#card-element');
// Handle real-time validation errors from the card Element.
card.on('change', function(event) {
  var displayError = document.getElementById('card-errors');
  if (event.error) {
    displayError.textContent = event.error.message;
  } else {
    displayError.textContent = '';
  }
});
// Handle form submission.
var form = document.getElementById('payment-form');
form.addEventListener('submit', function(event) {
  event.preventDefault();
  stripe.createToken(card).then(function(result) {
    if (result.error) {
      // Inform the user if there was an error.
      var errorElement = document.getElementById('card-errors');
      errorElement.textContent = result.error.message;
    } else {
      // Send the token to your server.
      stripeTokenHandler(result.token);
    }
  });
});
// Submit the form with the token ID.
function stripeTokenHandler(token) {
  // Insert the token ID into the form so it gets submitted to the server
  var form = document.getElementById('payment-form');
  var hiddenInput = document.createElement('input');
  hiddenInput.setAttribute('type', 'hidden');
  hiddenInput.setAttribute('name', 'stripeToken');
  hiddenInput.setAttribute('value', token.id);
  form.appendChild(hiddenInput);
  // Submit the form
  form.submit();
}
</script>
@endsection
