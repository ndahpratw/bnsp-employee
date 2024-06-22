@extends('layouts.admin.main')

@section('content')
    <div class="pagetitle">
        <h1>{{ $title }}</h1>
        <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active">{{ $title }}</li>
        </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

        <div class="col-lg-12">
            <div class="row">
                <!-- Pegawai Card -->
                <div class="col-xxl-4 col-xl-12">

                    <div class="card info-card customers-card">
                    <div class="card-body">
                        <h5 class="card-title">Pegawai</h5>

                        <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-people"></i>
                        </div>
                        <div class="ps-3">
                            <h6>{{ $jumlah_pegawai }} Pegawai</h6>
                        </div>
                        </div>

                    </div>
                    </div>

                </div><!-- End Pegawai Card -->
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title text-center">Informasi Pegawai Masuk</h5>

                            <!-- Line Chart -->
                            <canvas id="lineChart-pegawai-masuk" style="max-height: 400px;"></canvas>
                            <script>
                                document.addEventListener("DOMContentLoaded", () => {
                                    // Mengambil data dari server
                                    let waktu_bergabung = {!! json_encode($waktu_bergabung) !!};
                                    let jumlah_pegawai_per_bulan = {!! json_encode($jumlah_pegawai_per_bulan) !!};

                                    new Chart(document.querySelector('#lineChart-pegawai-masuk'), {
                                        type: 'line',
                                        data: {
                                            labels: waktu_bergabung,
                                            datasets: [{
                                                label: 'Jumlah data ',
                                                data: jumlah_pegawai_per_bulan,
                                                fill: false,
                                                borderColor: '#00215E',
                                                tension: 0.1
                                            }]
                                        },
                                        options: {
                                            scales: {
                                                y: {
                                                    beginAtZero: true
                                                }
                                            }
                                        }
                                    });
                                });
                            </script>
                            <!-- End Line CHart -->

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title text-center">Jenis Kelamin Pegawai</h5>

                            <!-- Bar Chart -->
                            <canvas id="barChart-jenis-kelamin-pegawai" style="min-height: 200px;"></canvas>
                            <script>
                                document.addEventListener("DOMContentLoaded", () => {
                                    // Mengambil data dari server
                                    let jenis_kelamin = {!! json_encode($jenis_kelamin) !!};
                                    let jumlah_data_jenis_kelamin = {!! json_encode($jumlah_data_jenis_kelamin) !!};

                                    new Chart(document.querySelector('#barChart-jenis-kelamin-pegawai'), {
                                        type: 'bar',
                                        data: {
                                            labels: jenis_kelamin,
                                            datasets: [{
                                                data: jumlah_data_jenis_kelamin,
                                                  label: 'jumlah : ',
                                                backgroundColor: [
                                                    '#222831',
                                                    '#EEEEEE',
                                                ],
                                                borderColor: [
                                                    '#222831',
                                                    '#EEEEEE',
                                                ],
                                                borderWidth: 1
                                            }]
                                        },
                                        options: {
                                            scales: {
                                                y: {
                                                    beginAtZero: true
                                                }
                                            }
                                            animation: {
                                                duration: 2000, // Durasi animasi dalam milidetik
                                                easing: 'easeInOutBounce' // Jenis easing animasi
                                            }
                                        }
                                    });
                                });
                            </script>
                            <!-- End Bar CHart -->

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title text-center"> Status Kepegawaian </h5>

                            <!-- Doughnut Chart -->
                            <canvas id="doughnutChart_kepegawaian_guru" style="max-height: 200px;"></canvas>
                            <script>
                                document.addEventListener("DOMContentLoaded", () => {
                                    // Mengambil data dari server
                                    let status_kepegawaian = {!! json_encode($status_kepegawaian) !!};
                                    let jumlah_data_kepegawaian = {!! json_encode($jumlah_data_kepegawaian) !!};

                                    new Chart(document.querySelector('#doughnutChart_kepegawaian_guru'), {
                                        type: 'doughnut',
                                        data: {
                                            labels: status_kepegawaian,
                                            datasets: [{
                                                label: 'Total : ',
                                                data: jumlah_data_kepegawaian,
                                                backgroundColor: [
                                                  'rgb(255, 99, 132)',
                                                  'rgb(255, 159, 64)',
                                                  'rgb(255, 205, 86)',
                                                  '#00215E',
                                                  'rgb(54, 162, 235)',
                                                  'rgb(153, 102, 255)',
                                                  'rgb(201, 203, 207)'
                                                ],
                                                hoverOffset: 4
                                            }]
                                        }
                                    });
                                });
                            </script>
                            <!-- End Doughnut CHart -->

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title text-center">Pendidikan Terakhir Pegawai</h5>

                            <!-- Bar Chart -->
                            <canvas id="barChart-pendidikan-terakhir" style="min-height: 200px;"></canvas>
                            <script>
                                document.addEventListener("DOMContentLoaded", () => {
                                    // Mengambil data dari server
                                    let pendidikan_terakhir = {!! json_encode($pendidikan_terakhir) !!};
                                    let jumlah_data_pendidikan_terakhir = {!! json_encode($jumlah_data_pendidikan_terakhir) !!};

                                    new Chart(document.querySelector('#barChart-pendidikan-terakhir'), {
                                        type: 'bar',
                                        data: {
                                            labels: pendidikan_terakhir,
                                            datasets: [{
                                                data: jumlah_data_pendidikan_terakhir,
                                                  label: 'jumlah : ',
                                                  backgroundColor: [
                                                        '#ff771d'
                                                    ],
                                                    borderColor: [
                                                        '#ff771d'
                                                    ],
                                                borderWidth: 1
                                            }]
                                        },
                                        options: {
                                            scales: {
                                                y: {
                                                    beginAtZero: true
                                                }
                                            }
                                        }
                                    });
                                });
                            </script>
                            <!-- End Bar CHart -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection