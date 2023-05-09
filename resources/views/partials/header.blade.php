<header>
    <div class="top-bar">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-2">
                    <a href="#">DC Power<span>℠</span> Visa©</a>
                </div>
                <div class="col-2 dropdown">
                    <a class="dropdown-toggle" href="{{ route('home') }}" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Addictional DC Site</a> 
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        {{-- Main menu --}}
        <nav class="navbar navbar-expand-lg navbar-light bg-white" id="main-menu">
            <div class="container-fluid">
                {{-- Logo --}}
                <a class="navbar-brand logo" href="{{ route('comics') }}">
                    <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Logo DC Comics">
                </a>
                {{-- /Logo --}}
                {{-- Collapsed menu --}}
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                {{-- /Collapsed menu --}}
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link {{ Route::currentRouteName() === 'home' ? 'active' : ''}}" href="{{ route('home') }}">characters</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Str::is('comic*', Route::currentRouteName()) ? 'active' : ''}}" href="{{ route('comics') }}">comics</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Route::currentRouteName() === 'movies' ? 'active' : ''}}" href="{{ route('home') }}">movies</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Route::currentRouteName() === 'tv' ? 'active' : ''}}" href="{{ route('home') }}">tv</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Route::currentRouteName() === 'games' ? 'active' : ''}}" href="{{ route('home') }}">games</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Route::currentRouteName() === 'collectibles' ? 'active' : ''}}" href="{{ route('home') }}">collectibles</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Route::currentRouteName() === 'videos' ? 'active' : ''}}" href="{{ route('home') }}">videos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Route::currentRouteName() === 'fans' ? 'active' : ''}}" href="{{ route('home') }}">fans</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Route::currentRouteName() === 'news' ? 'active' : ''}}" href="{{ route('home') }}">news</a>
                        </li>
                        {{-- Dropdown shop --}}
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="{{ route('home') }}" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            shop
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        {{-- /Dropdown shop --}}
                    </ul>
                    <form class="d-flex">
                        <div class="input-group border-bottom">
                            <input class="form-control ms-2 border-0 text-end" type="search" placeholder="Search" aria-label="Search">
                            <div class="input-group-text border-0 bg-white"><i class="fa-solid fa-magnifying-glass"></i></div>
                        </div>
                    {{-- <button class="btn btn-outline-success" type="submit">Search</button> --}}
                    </form>
                </div>
            </div>
        </nav>
        {{-- /Main menu --}}
    </div>
</header>
