<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet" />
<!-- CSS only -->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('backend/css/style.css') }}" />
    
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