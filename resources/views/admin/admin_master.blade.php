<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('backend/css/style.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" integrity="sha512-wnea99uKIC3TJF7v4eKk4Y+lMz2Mklv18+r4na2Gn1abDRPPOeef95xTzdwGD9e6zXJBteMIhZ1+68QC5byJZw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="{{ asset('backend/images/favicon.ico') }}" type="image/x-icon">  


    <title>Admin Panel</title>
</head>

<body>
    <!-- SIDEBAR -->
    <section id="sidebar">
        @include('admin.body.sidebar')
    </section>
    <!-- SIDEBAR -->

    <!-- CONTENT -->
    <section id="content">
        <!-- NAVBAR -->
        @include('admin.body.navbar')
        <!-- NAVBAR -->
        @yield('main')
        
    </section>
    <!-- Content -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="{{ asset('backend/js/script.js') }}"></script>
</body>

</html>