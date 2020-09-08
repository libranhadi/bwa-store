<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>{{$title ?? 'BWAstore' }}</title>
{{-- style --}}

@stack('before-style')
@include('includes.style')
@stack('after-style')    

  </head>

  <body>
    <!-- navigasi -->
     <div class="page-dashboard">
      <div class="d-flex" id="wrapper" data-aos="fade-right">
        <!-- sidebar -->
        <div class="border-right" id="sidebar-wrapper">
          <div class="sidebar-heading text-center">
            <img src="/images/dashboard-store-logo.svg" alt="" class="my-4" />
          </div>
          <div class="list-group list-group-flush">
            <a
              href="dashboard.html"
              class="list-group-item-action list-group-item active"
              >Dashboard</a
            >
            <a
              href="product.html"
              class="list-group-item-action list-group-item"
              >My Product</a
            >
            <a
              href="dashboard-transactions.html"
              class="list-group-item-action list-group-item"
              >Transactions</a
            >
            <a
              href="settings.html"
              class="list-group-item-action list-group-item"
              >Store Settings</a
            >
            <a
              href="account.html"
              class="list-group-item-action list-group-item"
              >My account</a
            >
          </div>
        </div>

        <div id="page-content-wrapper">
          <nav
            class="navbar navbar-expand-lg navbar-light navbar-store fixed-top"
            data-aos="fade-down"
            aria-labelledby="navbarDropdown"
          >
            <div class="container-fluid">
              <button
                class="btn btn-secondary d-md-none mr-auto mr-2"
                id="menu-toggle"
              >
                &laquo; menu
              </button>
              <button
                class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarSupportedContent"
              >
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- dekstop navbar menu -->
                <ul class="navbar-nav d-none d-lg-flex ml-auto">
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
                      <a href="dashboard.html" class="dropdown-item"
                        >Dashboard</a
                      >
                      <a href="" class="dropdown-item">Settings</a>
                      <div class="dropdown-divider"></div>
                      <a href="/" class="dropdown-item">Logout</a>
                    </div>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link d-inline-block mt-2">
                      <img src="/images/icon-cart-filled.svg" alt="cart" />
                      <div class="card-badge rounded-circle px-0">3</div>
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

          <!-- section Content -->
          @yield('content')
        
        </div>
      </div>
    </div>
  
    <!-- page-content -->
  
@include('includes.footer')
    <!-- Bootstrap core JavaScript -->
    {{-- script --}}

    @stack('before-script')
    @include('includes.script')
    @stack('after-script')
    <script>
    $("#menu-toggle").click(function (e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>  
  </body>
</html>
