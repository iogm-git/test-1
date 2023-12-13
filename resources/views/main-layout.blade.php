<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $page }} - {{ $style }}</title>
    <link rel="stylesheet" href="{{ asset('assets/css') }}/root.css">
    @if (request()->is('/') or request()->is('login'))
        <link rel="stylesheet" href="{{ asset('assets/css') }}/{{ $page }}.css">
    @else
        <link rel="stylesheet" href="{{ asset('assets/css/management') }}/{{ $style }}.css">
    @endif
</head>

<body>
    <header>
        <p class="header__logo">Laravel</p>
        @auth
            <nav class="header__nav">
                <div class="header__link">
                    <p>User</p>
                    <div class="header__sublink">
                        <a href="/user">Data</a>
                        <a href="/user/create">Input</a>
                        <a href="/user/export" download="user.xlsx">Export</a>
                    </div>
                </div>
                <div class="header__link">
                    <p>Item</p>
                    <div class="header__sublink">
                        <a href="/item">Data</a>
                        <a href="/item/create">Input</a>
                        <a href="/item/export" download="item.xlsx">Export</a>
                    </div>
                </div>
                <div class="header__link">
                    <p>Salesman</p>
                    <div class="header__sublink">
                        <a href="/salesman">Data</a>
                        <a href="/salesman/create">Input</a>
                        <a href="/salesman/export" download="salesman.xlsx">Export</a>
                    </div>
                </div>
                <div class="header__link">
                    <p>Customer</p>
                    <div class="header__sublink">
                        <a href="/customer">Data</a>
                        <a href="/customer/create">Input</a>
                        <a href="/customer/export" download="customer.xlsx">Export</a>
                    </div>
                </div>
                <div class="header__link">
                    <p>TX Sales</p>
                    <div class="header__sublink">
                        <a href="/tx-sales">Data</a>
                        <a href="/tx-sales/create">Input</a>
                        <a href="/tx-sales/export" download="tx-sales.xlsx">Export</a>
                    </div>
                </div>
                <div class="header__link">
                    <p>TX Sub Sales</p>
                    <div class="header__sublink">
                        <a href="/tx-sub-sales">Data</a>
                        <a href="/tx-sub-sales/create">Input</a>
                        <a href="/tx-sub-sales/export" download="tx-sub-sales.xlsx">Export</a>
                    </div>
                </div>
            </nav>

        @endauth
        <div class="header__button">
            <div class="button btn-type-a btn-theme header__get__menu">Menu</div>
            @auth
                <a class="button btn-type-a btn-danger" href="logout">Logout</a>
            @else
                <a class="button btn-type-a btn-theme" href="login">Login</a>
            @endauth
        </div>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>&copy; Ilham Rahmat Akbar {{ date('Y') }} . All Rights Reservered</footer>
</body>

</html>
