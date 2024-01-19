<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- css main buat nampung main css kaya navbar sama footer sisanya bikin css file sendiri aja --}}
    <link rel="stylesheet" href="{{ asset('css/page/main.css') }}">

    {{--
        stack itu buat masukin css file di sini coba liat aja di file css nani ata push
        nanti push itu supaya bisa masukin code link:css ke stack di sini
        --}}
    @stack('css')
    <title>@yield('title')</title>
</head>
<body>
    {{--
        Bikin Navbar sama footer ada di main biar ga ush code2 ulang di setiap page
    --}}
    <nav>
        <div class="nav-content">
           <div class="nav-title"><h1>Amazing E-Grocery</h1></div>
           <div class="nav-button">
                {{-- ini cara route dengan name() di web.php --}}
                <a href="{{ route('regis') }}">Register</a>
                <a href="{{ route('login') }}">Login</a>
           </div>
        </div>
    </nav>

    @yield('content')

    <footer>
        &copy; Amazing E-Grocery 2023
    </footer>

    {{--
        ini sama kaya css di atas tapi yang ini push js filenya
        --}}
    @stack('js')
</body>
</html>
