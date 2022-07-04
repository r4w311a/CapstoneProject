<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
rel="stylesheet"
/>
<link
href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
rel="stylesheet"
/>
<link
href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.1.0/mdb.min.css"
rel="stylesheet"
/>
<link rel="shortcut icon" href="{{ asset('backend/images/favicon.ico') }}" type="image/x-icon">  
    <title>Admin Panel | Login</title>
</head>
<body>
    <section class="vh-100" style="background-color: #ff8f9c;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
              <div class="card shadow-2-strong" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">
      
                  <h3 class="mb-5">Admin Panel</h3>
                  @if (session('status'))
                  <div class="mb-4 font-medium text-sm text-green-600">
                      {{ session('status') }}
                  </div>
              @endif
              <x-jet-validation-errors class="mb-4" />
              <form method="POST" action="{{ isset($guard) ? url($guard. '/login') :  route('login') }}">
                  @csrf

                  <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="email" name="email" :value="old('email')" required autofocus  placeholder="name@example.com">
                    <label for="email">Email address</label>
                  </div>
                  <div class="form-floating">
                    <input type="password" class="form-control" id="password" placeholder="Password" name="password" required autocomplete="current-password">
                    <label for="password">Password</label>
                  </div>
      
                  <br>
                  <!-- Checkbox -->
                  <div class="form-check d-flex justify-content-start mb-4">
                    <input class="form-check-input" type="checkbox" value="" name="remember" id="remember" />
                    <label class="form-check-label" for="remember"> Remember password </label>
                    
                  </div>
      
                  <button class="btn btn-primary btn-lg btn-block" style="background-color: #ff8f9c" type="submit">Login</button>
                  <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" style="color: #ff8f9c" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                  
      </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</body>
</html>