   <nav
      class="navbar navbar-expand-lg navbar-light navbar-store fixed-top navbar-fixed-top"
      data-aos="fade-down"
      aria-labelledby="navbarDropdown"
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
            <li class="nav-item">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Categories</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Rewards</a>
            </li>
          </ul>
          <!-- dekstop navbar menu -->
          <ul class="navbar-nav d-none d-lg-flex">
            <li class="nav-item dropdown">
              <a
                href="#"
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
                Hi, Jane
              </a>

              <div class="dropdown-menu">
                <a href="dashboard.html" class="dropdown-item">Dashboard</a>
                <a href="" class="dropdown-item">Settings</a>
                <div class="dropdown-divider"></div>
                <a href="/" class="dropdown-item">Logout</a>
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
              <a href="#" class="nav-link"> Hi, Jane </a>
            </li>
            <li class="nav-item">
              <a href="" class="nav-link d-inline-block"> Cart </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>


     