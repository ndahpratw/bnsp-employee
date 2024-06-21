<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Home - Sekolah Dasar A</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/logo.png') }}" rel="icon">
  <link href="{{ asset('assets/img/logo.png') }}" rel="logo">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('css/landing.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

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

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center" style="min-height: 100vh; background-color:white;">
    <div class="container">

      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>SEKOLAH DASAR A</h1>
          <h2>Bersama menciptakan insan cerdas dan cendekia</h2>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    @if ($kepala_sekolah->profile != null)
                      <img src="{{ asset('assets/img/profile-pegawai/'.$kepala_sekolah->profile) }}" class="img-fluid animated" alt="{{ $kepala_sekolah->profile }}">
                    @else
                      <img src="{{ asset('assets/img/logo/profile.jpg') }}" alt="profile" class="img-fluid animated">
                    @endif
                    <div class="carousel-caption">
                        <h1>{{ $kepala_sekolah->nama_lengkap }}</h1>
                        <p><span class="badge rounded-pill bg-danger">{{ $kepala_sekolah->peran }}</span></p>
                    </div>
                  </div>
                  @foreach ($data_pegawai as $item)                      
                    <div class="carousel-item">
                        @if ($item->profile != null)
                            <img src="{{ asset('assets/img/profile-pegawai/'.$item->profile) }}" alt="{{ $item->profile }}" class="img-fluid animated">
                        @else
                            <img src="{{ asset('assets/img/logo/profile.jpg') }}" alt="profile" class="img-fluid animated">
                        @endif
                        <div class="carousel-caption">
                            <h1>{{ $item->nama_lengkap }}</h1>
                            <p>
                                @if($item->peran == 'Administrasi')
                                    <span class="badge rounded-pill bg-info">{{ $item->peran }}</span>
                                @elseif($item->peran == 'Guru')
                                    <span class="badge rounded-pill bg-warning">{{ $item->peran }}</span>
                                @elseif($item->peran == 'Security')
                                    <span class="badge rounded-pill bg-secondary">{{ $item->peran }}</span>
                                @endif
                            </p>
                        </div>
                    </div>
                  @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </div>
      </div>
    </div>
  </section><!-- End Hero -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('js/landing.js') }}"></script>
</body>

</html>