@extends('layouts.landing.main')

@section('content')

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">

      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>SEKOLAH DASAR A</h1>
          <h2>Bersama menciptakan insan cerdas dan cendekia</h2>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img d-flex justify-content-center" data-aos="zoom-in" data-aos-delay="200" >
            <div id="carouselExampleIndicators" class="carousel slide w-75" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    @if ($kepala_sekolah->profile != null)
                      <img src="{{ asset('assets/img/profile-pegawai/'.$kepala_sekolah->profile) }}" class="img-fluid w-100 animated" alt="{{ $kepala_sekolah->profile }}">
                    @else
                      <img src="{{ asset('assets/img/logo/profile.jpg') }}" alt="profile" class="img-fluid w-100 animated">
                    @endif
                    <div class="carousel-caption">
                        <h3>{{ $kepala_sekolah->nama_lengkap }}</h3>
                        <p><span class="badge rounded-pill bg-danger">{{ $kepala_sekolah->peran }}</span></p>
                    </div>
                  </div>
                  @foreach ($data_pegawai as $item)                      
                    <div class="carousel-item">
                        @if ($item->profile != null)
                            <img src="{{ asset('assets/img/profile-pegawai/'.$item->profile) }}" alt="{{ $item->profile }}" class="img-fluid w-100 animated">
                        @else
                            <img src="{{ asset('assets/img/logo/profile.jpg') }}" alt="profile" class="img-fluid w-100 animated">
                        @endif
                        <div class="carousel-caption">
                            <h3>{{ $item->nama_lengkap }}</h3>
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
@endsection