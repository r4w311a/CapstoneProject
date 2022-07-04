@extends('main.master')
@section('login')
    <main>

        <div class="container">
            <div class="login-form">
                <form method="POST"
                action="{{ route('register') }}">
                @csrf
                <h1>Signup</h1>
                
                <x-jet-validation-errors class="mb-4" />
                <br>
                <label for="name">Name</label>
                <input type="name" id="name" name="name"
                :value="old('name')" required autofocus placeholder="Full Name">
                <br>
                <label for="email">Email</label>
                <input type="email" id="email" name="email"
                :value="old('email')" required autofocus placeholder="name@example.com">


                <label for="password">Password</label>
                <input type="password" id="password" placeholder="Password"
                name="password" required>


                <label for="password_confirmation">Confirm Password</label>
                <input type="password_confirmation" id="password_confirmation"
                name="password_confirmation" required autocomplete="password_confirmation">
      
             
               
                 
                  <p>
                    Already registered?
                    <a href="{{ route('login') }}">Login</a>
                  </p>
                <div class="buttons">
                  
                  <button type="submit" class="signupbtn">Signup</button>
                </div>
                
              </form>
            </div>
          </div>


    </main>
@endsection
