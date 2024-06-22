  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">
      <a href="" class="logo me-auto"><img src="{{ asset('assets/img/logo/sd.jpg') }}" alt="" class="rounded-circle img-fluid"></a>

      <nav id="navbar" class="navbar">
        <ul>
          @if (empty(auth()->user()))
            <li><a class="getstarted scrollto" href="/login">Login</a></li>
          @else
            <li class="nav-item dropdown">
                <a class="nav-link getstarted scrollto dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{auth()->user()->name}}
                </a>
                <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/dashboard">Dashboard</a></li>
                <li><a class="dropdown-item" href="/pegawai">Pegawai</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="/logout">Logout</a></li>
                </ul>
            </li>
          @endif
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->