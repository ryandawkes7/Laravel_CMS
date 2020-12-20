<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Ryan Dawkes">
    <title>Laravel CMS</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <style>
        body {
            padding-top: 54px;
        }
        @media(min-width: 992px)
        {
            body {
                padding-top: 56px;
            }
        }
    </style>
</head>
<body>

    {{-- Header --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/">LaravelCMS</a>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">

                    {{-- If user is logged in --}}
                    @if (Route::has('login'))
                        @auth
                            <li class="nav-item">

                                {{-- Logout Button --}}
                                <a class="nav-link" href="{{ route('logout') }}"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                            >
                                Logout
                            </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none">
                                    @csrf
                                </form>
                            </li>

                    {{-- If user is logged out --}}
                    @else
                            {{-- Login Button --}}
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Login</a>
                            </li>

                            {{-- Register Button --}}
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">Register</a>
                            </li>
                        @endauth
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    {{-- Main/Body --}}
    <div id="app">
        @yield('content')
    </div>

    {{-- Footer --}}
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; LaravelCMS 2020</p>
        </div>
    </footer>

</body>
</html>
