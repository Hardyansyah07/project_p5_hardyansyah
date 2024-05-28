<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand text-white" href="http://127.0.0.1:8000/home">UsepNews</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav"> <!-- Tambahkan kelas 'collapse' di sini -->
    </div>
    <!-- Tautan login dan register dipindahkan ke pojok kanan -->
    @guest
    <ul class="navbar-nav ml-auto">
      @if (Route::has('login'))
        <li class="nav-item ml-auto">
          <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
      @endif
      @if (Route::has('register'))
        <li class="nav-item">
          <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
        </li>
      @endif
    @else
      <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button"
          data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
          {{ Auth::user()->name }}
        </a>
        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
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
</nav>
