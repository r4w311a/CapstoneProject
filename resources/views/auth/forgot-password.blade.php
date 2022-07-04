@extends('main.master')
@section('login')
    <main>

        <div class="container">
            <div class="login-form">
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <h1>Reset your password</h1>
                 
                    <label for="email">Email:</label>
                <input type="email" id="email" name="email"
                :value="old('email')" required >
                <div class="buttons">
                  
                    <button type="submit" class="signupbtn">Reset Password</button>
                  </div>
                </form>
            </div>
          </div>

    </main>
@endsection
