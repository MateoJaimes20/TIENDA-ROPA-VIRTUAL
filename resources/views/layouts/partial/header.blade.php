  <!-- Navbar -->
  <nav class="main-header navbar  fixed-top navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav mx-2">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <div class="user-panel mt-1 d-flex">
    <div class="image">
        <img src="{{ asset('backend/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
    </div>
    <div class="info ms-2">
        @guest
            @if (Route::has('login'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
            @endif

            @if (Route::has('register'))
                <li>
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif
        @else
            <div class="d-flex mt-1 mx-2">
                <span>{{ Auth::user()->name }}</span>
                <a id="navbarDropdown" class="nav-link ms-3" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    <img src="{{ asset('backend/dist/img/cerrar-sesion.png') }}" alt="Cerrar sesión" style="width: 20px; height: 20px;" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                </a>
            </div>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        @endguest
    </div>
</div>
  </nav>
  <!-- /.navbar -->