@extends('main.main_master')
@section('login')
    <main>

        <section class="vh-100" style="background-color: var(--white)">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                        <div class="card shadow-2-strong" style="border-radius: 1rem;">
                            <div class="card-body p-5 text-center">



                                <h3 class="mb-5">Login</h3>
                                @if (session('status'))
                                    <div class="mb-4 font-medium text-sm text-green-600">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                <x-jet-validation-errors class="mb-4" />
                                <form method="POST"
                                    action="{{ isset($guard) ? url($guard . '/login') : route('login') }}">
                                    @csrf

                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control" id="email" name="email"
                                            :value="old('email')" required autofocus placeholder="name@example.com">
                                        <label for="email">Email address</label>
                                    </div>
                                    <div class="form-floating">
                                        <input type="password" class="form-control" id="password" placeholder="Password"
                                            name="password" required autocomplete="current-password">
                                        <label for="password">Password</label>
                                    </div>

                                    <br>
                                    <!-- Checkbox -->


                                    <button class="btn btn-primary btn-lg btn-block"
                                        style="background-color: var(--salmon-pink)" type="submit">Login</button>
                                    <div class="flex items-center justify-end mt-4">
                                        @if (Route::has('password.request'))
                                            <a class="underline text-sm text-gray-600 hover:text-gray-900"
                                                style="color: var(--salmon-pink)" href="{{ route('password.request') }}">
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
    </main>
@endsection
