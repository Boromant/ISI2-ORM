<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{asset('/css/mangas.css')}}">
        <link rel="stylesheet" href="{{asset('lib/bootstrap/bootstrap.min.css')}}">

        <title>
            @yield('titrePage')
        </title>
    </head>
    <body>
        <header>
            @yield('titreItem')
        </header>
        <li class="nav-item dropdown">
            @auth
                <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                    Bienvenue, {{ Auth::user()->name }}
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li>
                        <a class="dropdownitem" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>                
                </ul>
            @else
                <a class="nav-link active" aria-current="page" href="{{ route('login') }}">Login</a>
            @endauth
        </li>
        @yield('contenu')
        <footer class="footer">
            MangaWeb - copyright 3AInfo - 2021
        </footer>
        <script type='text/javascript' src="{{asset('/lib/js/bootstrap.bundle.min.js')}}"></script>
    </body>
</html>