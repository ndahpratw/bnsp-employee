@extends('layouts.admin.main')

@section('content')
    <div class="pagetitle">
        <h1>{{ $title }}</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="/pegawai">{{ $title }}</a></li>
                <li class="breadcrumb-item active">{{ $sub_title }}</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
        <div class="row">

            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body pt-3">
                        <h4> Informasi Pribadi </h4>
                        <div class="row mx-3">
                            <div class="col-md-6">
                                <table>
                                    <tr>
                                        <td> Nama Lengkap </td>
                                        <td class="w-25 text-center"> : </td>
                                        <td> {{ $detail_pegawai->nama_lengkap }} </td>
                                    </tr>
                                    <tr>
                                        <td> NIK </td>
                                        <td class="w-25 text-center"> : </td>
                                        <td> {{ $detail_pegawai->NIK }} </td>
                                    </tr>
                                    <tr>
                                        <td> Jenis Kelamin </td>
                                        <td class="w-25 text-center"> : </td>
                                        <td>
                                            @if($detail_pegawai->jenis_kelamin == 'L')
                                                Laki - Laki
                                            @elseif($detail_pegawai->jenis_kelamin == 'P')
                                                Perempuan
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> NIP </td>
                                        <td class="w-25 text-center"> : </td>
                                        <td>
                                            @if ( $detail_pegawai->NIP == null)
                                              <i> belum memiliki NIP </i>  
                                            @else
                                                {{  $detail_pegawai->NIP }}
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> Tempat Lahir </td>
                                        <td class="w-25 text-center"> : </td>
                                        <td> {{ $detail_pegawai->tempat_lahir }} </td>
                                    </tr>
                                    <tr>
                                        <td> Tanggal Lahir </td>
                                        <td class="w-25 text-center"> : </td>
                                        <td> {{ $detail_pegawai->tanggal_lahir }} </td>
                                    </tr>
                                    <tr>
                                        <td> Agama </td>
                                        <td class="w-25 text-center"> : </td>
                                        <td> {{ $detail_pegawai->agama }} </td>
                                    </tr>
                                    <tr>
                                        <td> Status Menikah </td>
                                        <td class="w-25 text-center"> : </td>
                                        <td> {{ $detail_pegawai->status_menikah }} </td>
                                    </tr>
                                    <tr>
                                        <td> Status Kepegawaian </td>
                                        <td class="w-25 text-center"> : </td>
                                        <td> {{ $detail_pegawai->status_kepegawaian }} </td>
                                    </tr>
                                    <tr>
                                        <td> Peran / Jabatan </td>
                                        <td class="w-25 text-center"> : </td>
                                        <td>
                                            @if($detail_pegawai->peran == 'Kepala Sekolah')
                                                <span class="badge rounded-pill bg-danger">{{ $detail_pegawai->peran }}</span>
                                            @elseif($detail_pegawai->peran == 'Administrasi')
                                                <span class="badge rounded-pill bg-info">{{ $detail_pegawai->peran }}</span>
                                            @elseif($detail_pegawai->peran == 'Guru')
                                                <span class="badge rounded-pill bg-warning">{{ $detail_pegawai->peran }}</span>
                                            @elseif($detail_pegawai->peran == 'Security')
                                                <span class="badge rounded-pill bg-secondary">{{ $detail_pegawai->peran }}</span>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> Bergabung pada </td>
                                        <td class="w-25 text-center"> : </td>
                                        <td> {{ $detail_pegawai->bergabung }} </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-md-6 d-flex justify-content-end">
                                @if ($detail_pegawai->profile != null)
                                    <img src="{{ asset('assets/img/profile-pegawai/'.$detail_pegawai->profile) }}" alt="{{ $detail_pegawai->profile }}" class="border" style="max-height: 275px">
                                @else
                                    <img src="{{  asset('assets/img/logo/profile.jpg') }}" alt="profile" class="border" style="max-height: 275px">
                                @endif
                            </div>
                        </div>

                        <h4 class="mt-3"> Informasi Pendidikan </h4>
                        <table class="mx-3">
                            <tr>
                                <td> Pendidikan Terakhir </td>
                                <td class="w-25 text-center"> : </td>
                                <td>
                                    {{ $detail_pegawai->pendidikan_terakhir }}</a>
                                </td>
                            </tr>
                            <tr>
                                <td> Nama Instansi </td>
                                <td class="w-25 text-center"> : </td>
                                <td> {{ $detail_pegawai->nama_instansi }} </td>
                            </tr>
                            <tr>
                                <td> Jurusan </td>
                                <td class="w-25 text-center"> : </td>
                                <td> {{ $detail_pegawai->jurusan }} </td>
                            </tr>
                            <tr>
                                <td> Tahun Lulus </td>
                                <td class="w-25 text-center"> : </td>
                                <td> {{ $detail_pegawai->tahun_lulus }} </td>
                            </tr>
                        </table>

                        <h4 class="mt-3"> Informasi Lainnya </h4>
                        <table class="mx-3">
                            <tr>
                                <td> Email </td>
                                <td class="w-25 text-center"> : </td>
                                <td>
                                    <a href="mailto:{{ $detail_pegawai->email }}" target="_blank">{{ $detail_pegawai->email }}</a>
                                </td>
                            </tr>
                            <tr>
                                <td> Telepon </td>
                                <td class="w-25 text-center"> : </td>
                                <td>
                                    <a href="https://wa.me/{{ $detail_pegawai->no_telepon }}" target="_blank">{{ $detail_pegawai->no_telepon }}</a>
                                </td>
                            </tr>
                            <tr>
                                <td> Alamat </td>
                                <td class="w-25 text-center"> : </td>
                                <td> {{ $detail_pegawai->alamat }} </td>
                            </tr>
                        </table>


                        <div class="d-flex justify-content-end my-3 mx-1">
                            <a href="{{ route('pegawai.index') }}" class="btn btn-outline-secondary"> Kembali </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
