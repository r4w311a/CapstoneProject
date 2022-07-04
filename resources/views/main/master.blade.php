<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />
    
        <link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/5.0.7/sweetalert2.min.css" rel="stylesheet">

    <link rel="shortcut icon" href="{{ asset('backend/images/home-favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    @livewireStyles


</head>

<body>
    <!--
    - HEADER
  -->

    @include('main.body.header')

    <!--
    - MAIN
  -->

    @yield('content')
    @yield('login')
    @yield('productDetails')
    <!--
    - FOOTER
  -->

    @include('main.body.footer')
    <!--
    - custom js link
  -->


    <script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/glide.min.js"></script>
    <script src="{{ asset('js/slider.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>


    @include('sweetalert::alert')
    @livewireScripts
    @stack('scripts')
</body>

</html>
