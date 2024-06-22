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

    <section class="section profile">
        <div class="row">
            <div class="col-xl-12">
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <i class="bi bi-check-circle me-1"></i>
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @elseif (session()->has('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <i class="bi bi-exclamation-octagon me-1"></i>
                        {{ session('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
            </div>

            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body pt-3">
                        <div class="d-flex align-items-center justify-content-between m-3">
                            <h5 class="card-title">Total : {{ count($data_pegawai) }} Pegawai</h5>
                            <a href="{{ route('pegawai.create') }}" class="btn btn-primary">
                                <i class="bi bi-plus"></i> Data Baru
                            </a>
                        </div>

                        <div class="table-responsive">
                            <table class="table datatable" id="pegawai">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Profile</th>
                                        <th>Nama</th>
                                        <th>NIP</th>
                                        <th>Gender</th>
                                        <th>Jabatan</th>
                                        <th>Bergabung Pada</th>
                                        <th class="d-flex gap-2">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data_pegawai as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                @if ($item->profile != null)
                                                    <img src="{{ asset('assets/img/profile-pegawai/'.$item->profile) }}" alt="{{ $item->profile }}" style="width: 150px; height: 150px; border:1px solid black">
                                                @else
                                                    <img src="{{ asset('assets/img/logo/profile.jpg') }}" alt="profile" style="width: 150px; height: 150px; border:1px solid black">
                                                @endif
                                            </td>
                                            <td>{{ $item->nama_lengkap}}</td>
                                            <td>{{ $item->NIP }}</td>
                                            <td>
                                                @if ($item->jenis_kelamin == 'L')
                                                    Laki - Laki
                                                @else
                                                    Perempuan
                                                @endif
                                            </td>
                                            <td class="d-flex gap-2">
                                                @if($item->peran == 'Kepala Sekolah')
                                                    <span class="badge rounded-pill bg-danger">{{ $item->peran }}</span>
                                                @elseif($item->peran == 'Administrasi')
                                                    <span class="badge rounded-pill bg-info">{{ $item->peran }}</span>
                                                @elseif($item->peran == 'Guru')
                                                    <span class="badge rounded-pill bg-warning">{{ $item->peran }}</span>
                                                @elseif($item->peran == 'Security')
                                                    <span class="badge rounded-pill bg-secondary">{{ $item->peran }}</span>
                                                @endif
                                            </td>
                                            <td>{{ $item->bergabung }}</td>
                                            <td>
                                                <a href="{{ route('pegawai.edit', $item->id) }}" class="btn btn-primary btn-sm">
                                                    <i class="ri-pencil-fill"></i>
                                                </a>
                                                <a href="{{ route('pegawai.show', $item->id) }}" class="btn btn-info btn-sm">
                                                    <i class="bi bi-eye-fill"></i>
                                                </a>
                                                <button type="button" class="btn btn-danger btn-sm shadow-none" data-bs-toggle="modal" data-bs-target="#hapus{{ $item->id }}">
                                                    <i class="bi bi-trash-fill"></i>
                                                </button>
                                                <div class="modal fade" id="hapus{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title text-center">Konfirmasi Hapus Data</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body text-center">
                                                                <p style="color: black">Apakah anda yakin untuk menghapus data informasi dari <br> <b>{{ $item->nama_lengkap }}</b>?</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary btn-sm shadow-none" data-bs-dismiss="modal">Tidak</button>
                                                                <form action="{{ route('pegawai.destroy', $item->id) }}" method="POST" style="display: inline;">
                                                                    @method('delete')
                                                                    @csrf
                                                                    <input type="submit" value="Hapus" class="btn btn-danger btn-sm shadow-none">
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection