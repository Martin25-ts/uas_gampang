<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- css main buat nampung main css kaya navbar sama footer sisanya bikin css file sendiri aja --}}
    <link rel="stylesheet" href="{{ asset('css/page/main.css') }}">
    @auth
        <link rel="stylesheet" href="{{ asset('css/layout/hasAuth.css') }}">
    @else
        <link rel="stylesheet" href="{{ asset('css/layout/hasntAuth.css') }}">
    @endauth
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
            <div class="nav-title">
                <h1>Amazing E-Grocery</h1>
            </div>
            @auth
                <div class="nav-button">
                    <form action="{{ route('logout', ['id'=>1]) }}" method="post">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>
                </div>
            @else
                <div class="nav-button">
                    {{-- ini cara route dengan name() di web.php --}}
                    <a href="{{ route('regis') }}">Register</a>
                    <a href="{{ route('loginPage') }}">Login</a>
                </div>
            @endauth


        </div>
    </nav>

    @auth
        <header>
            <a href="{{ route('dashboard-log', ['page'=>1]) }}">Home</a>
            <a href="{{ route('cartPage') }}">Cart</a>
            <a href="">Profile</a>
            @if (Auth::user()->role->role == "Admin")
                <a href="">Account Maintenance</a>
            @endif
        </header>
    @endauth

    @yield('content')

    <footer>
        &copy; Amazing E-Grocery 2023
    </footer>

    {{--
        ini sama kaya css di atas tapi yang ini push js filenya
    --}}

    @stack('js')
    @if (session('error'))
        <script>
            // Menampilkan pesan kesalahan sebagai alert
            alert("{{ session('error') }}");
        </script>
    @elseif (session('success'))
        <script>
            // Menampilkan pesan keberhasilan sebagai alert
            alert("{{ session('success') }}");
        </script>
    @endif

</body>

</html>
