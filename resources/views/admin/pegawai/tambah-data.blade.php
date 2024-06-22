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
                        <h4 class="mx-2 mt-2 my-1"> Form Tambah Pegawai Baru </h4>
                        <p class="text-danger mx-2"><span>*</span> : <b>wajib diisi</b></p>
                        <form action="{{ route('pegawai.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="row m-3">
                                <p class="text-primary"> Informasi Umum </p>
                                <div class="col-md-12 mt-2">
                                    <label for="nama_lengkap" class="form-label">Nama Lengkap <span class="text-danger">*</span></label>
                                    <input type="text" name="nama_lengkap" class="form-control @error('nama_lengkap') is-invalid @enderror shadow-none" id="nama_lengkap" value="{{ old('nama_lengkap') }}" placeholder="Masukkan nama lengkap">
                                    @error('nama_lengkap') 
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div> 
                                    @enderror
                                </div>
                                <div class="col-md-6 mt-2">
                                    <label for="NIK" class="form-label">NIK <span class="text-danger">*</span></label>
                                    <input type="number" name="NIK" class="form-control @error('NIK') is-invalid @enderror shadow-none" id="NIK" value="{{ old('NIK') }}" placeholder="Masukkan nomor induk penduduk">
                                    @error('NIK') 
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div> 
                                    @enderror
                                </div>
                                <div class="col-md-6 mt-2">
                                    <label for="NIP" class="form-label">NIP</label>
                                    <input type="number" name="NIP" class="form-control @error('NIP') is-invalid @enderror shadow-none" id="NIP" value="{{ old('NIP') }}" placeholder="Kosongkan jika masih belum memiliki NIP">
                                    @error('NIP') 
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div> 
                                    @enderror
                                </div>
                                <div class="col-md-4 mt-2">
                                    <label for="tempat_lahir" class="form-label">Tempat Lahir <span class="text-danger">*</span></label>
                                    <input type="text" name="tempat_lahir" class="form-control @error('tempat_lahir') is-invalid @enderror shadow-none" id="tempat_lahir" value="{{ old('tempat_lahir') }}" placeholder="Masukkan tempat lahir">
                                    @error('tempat_lahir') 
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div> 
                                    @enderror
                                </div>
                                <div class="col-md-4 mt-2">
                                    <label for="tanggal_lahir" class="form-label">Tanggal Lahir <span class="text-danger">*</span></label>
                                    <input type="date" name="tanggal_lahir" class="form-control @error('tanggal_lahir') is-invalid @enderror shadow-none" id="tanggal_lahir" value="{{ old('tanggal_lahir') }}">
                                    @error('tanggal_lahir') 
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div> 
                                    @enderror
                                </div>
                                <div class="col-md-4 mt-2">
                                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin <span class="text-danger">*</span></label>
                                    <select class="form-select @error('jenis_kelamin') is-invalid @enderror" id="jenis_kelamin" aria-label="Default select example" name="jenis_kelamin">
                                        <option selected disabled>Pilih Jenis Kelamin</option>
                                        <option value="L" {{ old('jenis_kelamin') == 'L' ? 'selected' : '' }}>Laki - Laki</option>
                                        <option value="P" {{ old('jenis_kelamin') == 'P' ? 'selected' : '' }}>Perempuan</option>
                                      </select>
                                    @error('jenis_kelamin') 
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div> 
                                    @enderror
                                </div>
                                <div class="col-md-4 mt-2">
                                    <label for="profile" class="form-label">Profile </label>
                                    <input type="file" name="profile" class="form-control @error('profile') is-invalid @enderror shadow-none" id="profileInput" value="{{ old('profile') }}" accept="image/*">
                                    <img id="previewProfile" class="my-1" style="width: 100px">
                                    @error('profile') 
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div> 
                                    @enderror
                                </div>
                                <div class="col-md-4 mt-2">
                                    <label for="agama" class="form-label">Agama <span class="text-danger">*</span></label>
                                    <select class="form-select @error('agama') is-invalid @enderror" id="agama" aria-label="Default select example" name="agama">
                                        <option selected disabled>Pilih Agama</option>
                                        <option value="ISLAM" {{ old('agama') == 'ISLAM' ? 'selected' : '' }}>Islam</option>
                                        <option value="KRISTEN" {{ old('agama') == 'KRISTEN' ? 'selected' : '' }}>Kristen</option>
                                        <option value="KATOLIK" {{ old('agama') == 'KATOLIK' ? 'selected' : '' }}>Katolik</option>
                                        <option value="HINDU" {{ old('agama') == 'HINDU' ? 'selected' : '' }}>Hindu</option>
                                        <option value="BUDHA" {{ old('agama') == 'BUDHA' ? 'selected' : '' }}>Budha</option>
                                        <option value="Konghucu" {{ old('agama') == 'Konghucu' ? 'selected' : '' }}>Konghucu</option>
                                    </select>
                                    @error('agama') 
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div> 
                                    @enderror
                                </div>
                                <div class="col-md-4 mt-2">
                                    <label for="status_menikah" class="form-label">Status Menikah <span class="text-danger">*</span></label>
                                    <select class="form-select @error('status_menikah') is-invalid @enderror" id="status_menikah" aria-label="Default select example" name="status_menikah">
                                        <option selected disabled>Pilih Status Menikah</option>
                                        <option value="belum menikah" {{ old('status_menikah') == 'belum menikah' ? 'selected' : '' }}>Belum Menikah</option>
                                        <option value="sudah menikah" {{ old('status_menikah') == 'sudah menikah' ? 'selected' : '' }}>Sudah Menikah</option>
                                      </select>
                                    @error('status_menikah') 
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div> 
                                    @enderror
                                </div>
                                <div class="col-md-4 mt-2">
                                    <label for="peran" class="form-label">Peran / Jabatan <span class="text-danger">*</span></label>
                                    <select class="form-select @error('peran') is-invalid @enderror" aria-label="Default select example" name="peran" id="peran">
                                        <option selected disabled>Pilih Peran / Jabatan</option>
                                        <option value="Kepala Sekolah" {{ old('peran') == 'Kepala Sekolah' ? 'selected' : '' }}>Kepala Sekolah</option>
                                        <option value="Guru" {{ old('peran') == 'Guru' ? 'selected' : '' }}>Guru</option>
                                        <option value="Administrasi" {{ old('peran') == 'Administrasi' ? 'selected' : '' }}>Administrasi</option>
                                        <option value="Security" {{ old('peran') == 'Security' ? 'selected' : '' }}>Security</option>
                                    </select>
                                    @error('peran') 
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div> 
                                    @enderror
                                </div>
                                <div class="col-md-4 mt-2">
                                    <label for="status_kepegawaian" class="form-label">Status Kepegawaian <span class="text-danger">*</span></label>
                                    <select class="form-select @error('status_kepegawaian') is-invalid @enderror" aria-label="Default select example" name="status_kepegawaian" id="status_kepegawaian">
                                        <option selected disabled>Pilih Status Kepegawaian</option>
                                        <option value="-" {{ old('status_kepegawaian') == '-' ? 'selected' : '' }}>-</option>
                                        <option value="LTH" {{ old('status_kepegawaian') == 'LTH' ? 'selected' : '' }}>LTH</option>
                                        <option value="PN" {{ old('status_kepegawaian') == 'PN' ? 'selected' : '' }}>PN</option>
                                        <option value="CPNS" {{ old('status_kepegawaian') == 'CPNS' ? 'selected' : '' }}>CPNS</option>
                                        <option value="PNS" {{ old('status_kepegawaian') == 'PNS' ? 'selected' : '' }}>PNS</option>
                                        <option value="PPPK" {{ old('status_kepegawaian') == 'PPPK' ? 'selected' : '' }}>PPPK</option>
                                        <option value="Sukwan" {{ old('status_kepegawaian') == 'Sukwan' ? 'selected' : '' }}>Sukwan</option>
                                    </select>
                                    @error('status_kepegawaian') 
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div> 
                                    @enderror
                                </div>
                                <div class="col-md-4 mt-2">
                                    <label for="bergabung" class="form-label"> Bergabung <span class="text-danger">*</span></label>
                                    <input type="date" name="bergabung" class="form-control @error('bergabung') is-invalid @enderror shadow-none" id="bergabung" value="{{ old('bergabung') }}">
                                    @error('bergabung') 
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div> 
                                    @enderror
                                </div>

                                <p class="text-primary mt-5"> Informasi Pendidikan </p>
                                <div class="col-md-3 mt-2">
                                    <label for="pendidikan_terakhir" class="form-label">Pendidikan Terakhir <span class="text-danger">*</span></label>
                                    <select class="form-select @error('pendidikan_terakhir') is-invalid @enderror" aria-label="Default select example" name="pendidikan_terakhir">
                                        <option selected disabled>Pilih Pendidikan Terakhir</option>
                                        <option value="TIDAK SEKOLAH" {{ old('pendidikan_terakhir') == 'TIDAK SEKOLAH' ? 'selected' : '' }}>Tidak Sekolah</option>
                                        <option value="SD SEDERAJAT" {{ old('pendidikan_terakhir') == 'SD SEDERAJAT' ? 'selected' : '' }}>SD Sederajat</option>
                                        <option value="SMP SEDERAJAT" {{ old('pendidikan_terakhir') == 'SMP SEDERAJAT' ? 'selected' : '' }}>SMP Sederajat</option>
                                        <option value="SMA SEDERAJAT" {{ old('pendidikan_terakhir') == 'SMA SEDERAJAT' ? 'selected' : '' }}>SMA Sederajat</option>
                                        <option value="D3" {{ old('pendidikan_terakhir') == 'D3' ? 'selected' : '' }}>D3</option>
                                        <option value="D4" {{ old('pendidikan_terakhir') == 'D4' ? 'selected' : '' }}>D4</option>
                                        <option value="S1" {{ old('pendidikan_terakhir') == 'S1' ? 'selected' : '' }}>S1</option>
                                        <option value="S2" {{ old('pendidikan_terakhir') == 'S2' ? 'selected' : '' }}>S2</option>
                                        <option value="S3" {{ old('pendidikan_terakhir') == 'S3' ? 'selected' : '' }}>S3</option>
                                    </select>
                                    @error('pendidikan_terakhir') 
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div> 
                                    @enderror
                                </div>
                                <div class="col-md-3 mt-2">
                                    <label for="nama_instansi" class="form-label">Nama Instansi <span class="text-danger">*</span></label>
                                    <input type="text" name="nama_instansi" class="form-control @error('nama_instansi') is-invalid @enderror shadow-none" id="nama_instansi" value="{{ old('nama_instansi') }}" placeholder="Masukkan nama instansi">
                                    @error('nama_instansi') 
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div> 
                                    @enderror
                                </div>
                                <div class="col-md-3 mt-2">
                                    <label for="jurusan" class="form-label">Jurusan <span class="text-danger">*</span></label>
                                    <input type="text" name="jurusan" class="form-control @error('jurusan') is-invalid @enderror shadow-none" id="jurusan" value="{{ old('jurusan') }}" placeholder="Masukkan nama jurusan">
                                    @error('jurusan') 
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div> 
                                    @enderror
                                </div>
                                <div class="col-md-3 mt-2">
                                    <label for="tahun_lulus" class="form-label">Tahun Lulus <span class="text-danger">*</span></label>
                                    <input type="number" name="tahun_lulus" class="form-control @error('tahun_lulus') is-invalid @enderror shadow-none" id="tahun_lulus" value="{{ old('tahun_lulus') }}" placeholder="Masukkan tahun lulus">
                                    @error('tahun_lulus') 
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div> 
                                    @enderror
                                </div>

                                <p class="text-primary mt-5"> Informasi Lainnya </p>
                                <div class="col-md-4 mt-2">
                                    <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror shadow-none" id="email" value="{{ old('email') }}" placeholder="Masukkan alamat email">
                                    @error('email') 
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div> 
                                    @enderror
                                </div>
                                <div class="col-md-4 mt-2">
                                    <label for="no_telepon" class="form-label">No Telepon <span class="text-danger">*</span></label>
                                    <input type="number" name="no_telepon" class="form-control @error('no_telepon') is-invalid @enderror shadow-none" id="no_telepon" value="{{ old('no_telepon') }}" placeholder="Contoh : 6282.............">
                                    @error('no_telepon') 
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div> 
                                    @enderror
                                </div>
                                <div class="col-md-4 mt-2">
                                    <label for="alamat" class="form-label">Alamat <span class="text-danger">*</span></label>
                                    <textarea name="alamat" id="alamat" class="form-control @error('alamat') is-invalid @enderror shadow-none" cols="1" rows="2" > {{ old('alamat') }} </textarea>
                                    @error('alamat') 
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div> 
                                    @enderror
                                </div>

                                <div class="d-flex justify-content-between align-items-center my-3 mx-1">
                                    <a href="{{ route('pegawai.index') }}" class="btn btn-secondary"> Kembali </a>
                                    <button type="submit" class="btn btn-outline-success"> Kirim </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
<script>
$(document).ready(function() {
    $('#profileInput').on('change', function(event) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#previewProfile').attr('src', e.target.result);
        };
        reader.readAsDataURL(event.target.files[0]);
    });
});
    </script>
@endsection