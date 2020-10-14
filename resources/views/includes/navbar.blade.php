  <nav
      class="navbar navbar-expand-lg navbar-light navbar-store fixed-top navbar-fixed-top"
      data-aos="fade-down"
    >
      <div class="container">
        <a class="navbar-brand" href="/index.html">
          <img src="/images/logo.svg" alt="Logo" />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarResponsive"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
            <a class="nav-link" href="{{ route('index') }}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('category') }}">Categories</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Rewards</a>
            </li>
            @guest
                
            <li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}">Sign up</a>
            </li>
            <li class="nav-item">
              <a class="nav-link btn btn-success px-4 text-white" href="{{ route('login') }}"
                >Sign In</a
              >
            </li>
            @endguest
            
          </ul>
            @auth
                  <!-- dekstop navbar menu -->
          <ul class="navbar-nav d-none d-lg-flex">
            <li class="nav-item dropdown">
              <a
                href="{{ route('dashboard-account') }}"
                class="nav-link"
                id="navbarDropdown"
                role="button"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                <img
                  src="/images/icon-user.png"
                  alt="icon-user"
                  class="rounded-circle mr-2 profile-picture"
                />
                Hi, {{ Auth::user()->name }}
              </a>

              <div class="dropdown-menu">
                <a href="{{ route('dashboard') }}" class="dropdown-item">Dashboard</a>
                <a href="{{ route('dashboard-settings') }}" class="dropdown-item">Settings</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item"  href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link d-inline-block mt-2">
                <img src="/images/icon-cart-empty.svg" alt="cart" />
              </a>
            </li>
          </ul>

          <!-- navbar mobile -->
          <ul class="navbar-nav d-block d-lg-none">
            <li class="nav-item">
              <a href="{{ route('dashboard-account') }}" class="nav-link"> Hi, {{ Auth::user()->name }} </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('cart') }}" class="nav-link d-inline-block"> Cart </a>
            </li>
          </ul>
            @endauth 
        </div>
      </div>
    </nav>