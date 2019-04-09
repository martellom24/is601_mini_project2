<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link {{ (request()->is('/')) ? 'active' : '' }}" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ (request()->is('/')) ? 'active' : '' }}" href="{{ route('about') }}">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ (request()->is('/')) ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a>
            </li>
            <!--<li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>-->
            @if (Route::has('login'))
                @auth
                    <li class="nav-item {{ (request()->is('/')) ? 'active' : '' }}"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                @else
                    <li class="nav-item {{ (request()->is('/')) ? 'active' : '' }}"><a class="nav-link" href="{{ route('login') }}">Login</a></li>

                    @if (Route::has('register'))
                        <li class="nav-item {{ (request()->is('/')) ? 'active' : '' }}"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                    @endif
                @endauth
            @endif
        </ul>
    </div>
</nav>