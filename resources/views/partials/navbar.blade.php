<div class="navbar navbar-dark bg-dark">
    <a class="logo" href="{{ url('/') }}">
    </a>
    <!-- Right Side Of Navbar -->
    <ul class="navbar-nav ml-auto">
        @auth
            <div class="container">
                <div class="row">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <form class="navbar-form navbar-right">
                        <p class="acc-info">
                            <span style="color: rgb(233,185,12);">{{ auth()->user()->name }}</span>
                            <br>balance: Kes <span style="color: rgb(255, 174, 168);">4000.00</span>
                            <br><span>{{ now('Africa/Nairobi')->toDateTimeString() }}</span>
                        </p>&nbsp;&nbsp;

                        <ul class="login">
                            <li><a style="color: rgb(8,59,236);" href="{{ url('/home') }}">Home</a></li>
                            <li><a style="color: rgb(255, 234, 168);" href="{{ url('/personaldetails') }}">Account</a>
                            </li>
                            <li><a style="color: rgb(175, 255, 168);" href="{{ url('/deposit') }}">Deposit</a></li>
                            <li><a style="color: rgb(255, 174, 168);" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}</a></li>
                        </ul>
                    </form>
                </div>
            </div>
        @endauth
    </ul>

    <!-- Right Side Of Navbar -->
    <ul class="navbar-nav ml-auto">
        <!-- Authentication Links -->
        @guest
            @if (Route::has('login'))
                <li class="nav-item">
                    <a href="{{ route('login') }}" class="btn btn-success btn-lg btn-block  active" role="button"
                       aria-pressed="true">{{ __('Login') }}</a>
                </li>
            @endif
            &nbsp;
            @if (Route::has('register'))
                <li class="nav-item">
                    <a href="{{ route('register') }}" class="btn btn-primary btn-lg btn-block active" role="button"
                       aria-pressed="true">{{ __('Register') }}</a>
                </li>
            @endif
        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false" v-pre>

                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
    </ul>
</div>

