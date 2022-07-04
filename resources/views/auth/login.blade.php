@extends('main.master')
@section('login')
    <main>

        <div class="container">
            <div class="login-form">
                <form method="POST"
                action="{{ isset($guard) ? url($guard . '/login') : route('login') }}">
                @csrf
                <h1>Login</h1>
                
                <x-jet-validation-errors class="mb-4" />
                <br>
                <label for="email">Email</label>
                <input type="email" id="email" name="email"
                :value="old('email')" required autofocus placeholder="name@example.com">



                <label for="password">Password</label>

                <input type="password" id="password" placeholder="Password"
                name="password" required autocomplete="current-password">



      
                <label>
                  <input
                    type="checkbox"
                    checked="checked"
                    name="remember"
                    style="margin-bottom: 15px"
                  />
                  Remember me
                </label>
               
                  <p>
                    @if (Route::has('password.request'))
                                            <a 
                                                 href="{{ route('password.request') }}">
                                                {{ __('Forgot your password?') }}
                                            </a>
                                        @endif
                  </p>
                  <p>
                    Don't have an account?
                    <a href="{{url('/register')}}">Sign Up</a>
                  </p>
                <div class="buttons">
                  
                  <button type="submit" class="signupbtn">Login</button>
                </div>
                
              </form>
            </div>
          </div>


    </main>
@endsection
