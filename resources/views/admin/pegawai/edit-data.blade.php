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
                        <h4 class="mx-2 mt-2 my-1"> Form Edit Data Pegawai </h4>
                        <p class="text-danger mx-2"><span>*</span> : <b>wajib diisi</b></p>
                        <form action="{{ route('pegawai.update', $detail_pegawai->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('put')

                            <div class="row m-3">
                                <p class="text-primary"> Informasi Umum </p>
                                <div class="col-md-12 mt-2">
                                    <label for="nama_lengkap" class="form-label">Nama Lengkap <span class="text-danger">*</span></label>
                                    <input type="text" name="nama_lengkap" class="form-control @error('nama_lengkap') is-invalid @enderror shadow-none" id="nama_lengkap" value="{{ $detail_pegawai->nama_lengkap }}" placeholder="Masukkan nama lengkap">
                                    <p id="nama_error" class="text-danger" ></p>
                                    @error('nama_lengkap') 
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div> 
                                    @enderror
                                </div>
                                <div class="col-md-6 mt-2">
                                    <label for="NIK" class="form-label">NIK <span class="text-danger">*</span></label>
                                    <input type="number" name="NIK" class="form-control @error('NIK') is-invalid @enderror shadow-none" id="NIK" value="{{ $detail_pegawai->NIK }}" placeholder="Masukkan nomor induk penduduk">
                                    <p id="NIK_error" class="text-danger" ></p>
                                    @error('NIK') 
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div> 
                                    @enderror
                                </div>
                                <div class="col-md-6 mt-2">
                                    <label for="NIP" class="form-label">NIP</label>
                                    <input type="number" name="NIP" class="form-control @error('NIP') is-invalid @enderror shadow-none" id="NIP" value="{{ $detail_pegawai->NIP }}" placeholder="Kosongkan jika masih belum memiliki NIP">
                                    @error('NIP') 
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div> 
                                    @enderror
                                </div>
                                <div class="col-md-4 mt-2">
                                    <label for="tempat_lahir" class="form-label">Tempat Lahir <span class="text-danger">*</span></label>
                                    <input type="text" name="tempat_lahir" class="form-control @error('tempat_lahir') is-invalid @enderror shadow-none" id="tempat_lahir" value="{{ $detail_pegawai->tempat_lahir }}" placeholder="Masukkan tempat lahir">
                                    <p id="tempat_lahir_error" class="text-danger" ></p>
                                    @error('tempat_lahir') 
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div> 
                                    @enderror
                                </div>
                                <div class="col-md-4 mt-2">
                                    <label for="tanggal_lahir" class="form-label">Tanggal Lahir <span class="text-danger">*</span></label>
                                    <input type="date" name="tanggal_lahir" class="form-control @error('tanggal_lahir') is-invalid @enderror shadow-none" id="tanggal_lahir" value="{{ $detail_pegawai->tanggal_lahir }}">
                                    <p id="tanggal_lahir_error" class="text-danger" ></p>
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
                                        <option value="L" {{ $detail_pegawai->jenis_kelamin == 'L' ? 'selected' : '' }}>Laki - Laki</option>
                                        <option value="P" {{ $detail_pegawai->jenis_kelamin == 'P' ? 'selected' : '' }}>Perempuan</option>
                                      </select>
                                      <p id="jenis_kelamin_error" class="text-danger" ></p>
                                    @error('jenis_kelamin') 
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div> 
                                    @enderror
                                </div>
                                <div class="col-md-2 mt-2">
                                    @if ($detail_pegawai->profile != null)
                                        <img id="profile" src="{{ asset('assets/img/profile-pegawai/'.$detail_pegawai->profile) }}" alt="{{ $detail_pegawai->profile }}" style="width: 100px; border:1px solid black">
                                    @else
                                        <img id="profile" src="{{  asset('assets/img/logo/profile.jpg') }}" alt="profile-pegawai" style="width: 100px; border:1px solid black">
                                    @endif
                                </div>
                                <div class="col-md-10 mt-2">
                                    <label id="profile" class="form-label">profile | 3 x 3</label>
                                    <input type="file"  id="profileInput" name="profile" class="form-control @error('profile') is-invalid @enderror shadow-none" id="profile" value="{{ $detail_pegawai->profile }}" accept="image/*">
                                    @error('profile') 
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div> 
                                    @enderror
                                </div>
                                <div class="col-md-6 mt-2">
                                    <label for="agama" class="form-label">Agama <span class="text-danger">*</span></label>
                                    <select class="form-select @error('agama') is-invalid @enderror" id="agama" aria-label="Default select example" name="agama">
                                        <option selected disabled>Pilih Agama</option>
                                        <option value="ISLAM" {{ $detail_pegawai->agama == 'ISLAM' ? 'selected' : '' }}>Islam</option>
                                        <option value="KRISTEN" {{ $detail_pegawai->agama == 'KRISTEN' ? 'selected' : '' }}>Kristen</option>
                                        <option value="KATOLIK" {{ $detail_pegawai->agama == 'KATOLIK' ? 'selected' : '' }}>Katolik</option>
                                        <option value="HINDU" {{ $detail_pegawai->agama == 'HINDU' ? 'selected' : '' }}>Hindu</option>
                                        <option value="BUDHA" {{ $detail_pegawai->agama == 'BUDHA' ? 'selected' : '' }}>Budha</option>
                                        <option value="Konghucu" {{ $detail_pegawai->agama == 'Konghucu' ? 'selected' : '' }}>Konghucu</option>
                                    </select>
                                    <p id="agama_error" class="text-danger" ></p>
                                    @error('agama') 
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div> 
                                    @enderror
                                </div>
                                <div class="col-md-6 mt-2">
                                    <label for="status_menikah" class="form-label">Tempat Lahir <span class="text-danger">*</span></label>
                                    <select class="form-select @error('status_menikah') is-invalid @enderror" id="status_menikah" aria-label="Default select example" name="status_menikah">
                                        <option selected disabled>Pilih Status Menikah</option>
                                        <option value="belum menikah" {{ $detail_pegawai->status_menikah == 'belum menikah' ? 'selected' : '' }}>Belum Menikah</option>
                                        <option value="sudah menikah" {{ $detail_pegawai->status_menikah == 'sudah menikah' ? 'selected' : '' }}>Sudah Menikah</option>
                                      </select>
                                      <p id="status_menikah_error" class="text-danger" ></p>
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
                                        <option value="Kepala Sekolah" {{ $detail_pegawai->peran == 'Kepala Sekolah' ? 'selected' : '' }}>Kepala Sekolah</option>
                                        <option value="Guru" {{ $detail_pegawai->peran == 'Guru' ? 'selected' : '' }}>Guru</option>
                                        <option value="Administrasi" {{ $detail_pegawai->peran == 'Administrasi' ? 'selected' : '' }}>Administrasi</option>
                                        <option value="Security" {{ $detail_pegawai->peran == 'Security' ? 'selected' : '' }}>Security</option>
                                    </select>
                                    <p id="peran_error" class="text-danger" ></p>
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
                                        <option value="-" {{ $detail_pegawai->status_kepegawaian == '-' ? 'selected' : '' }}>-</option>
                                        <option value="LTH" {{ $detail_pegawai->status_kepegawaian == 'LTH' ? 'selected' : '' }}>LTH</option>
                                        <option value="PN" {{ $detail_pegawai->status_kepegawaian == 'PN' ? 'selected' : '' }}>PN</option>
                                        <option value="CPNS" {{ $detail_pegawai->status_kepegawaian == 'CPNS' ? 'selected' : '' }}>CPNS</option>
                                        <option value="PNS" {{ $detail_pegawai->status_kepegawaian == 'PNS' ? 'selected' : '' }}>PNS</option>
                                        <option value="PPPK" {{ $detail_pegawai->status_kepegawaian == 'PPPK' ? 'selected' : '' }}>PPPK</option>
                                        <option value="Sukwan" {{ $detail_pegawai->status_kepegawaian == 'Sukwan' ? 'selected' : '' }}>Sukwan</option>
                                    </select>
                                    <p id="status_kepegawaian_error" class="text-danger" ></p>
                                    @error('status_kepegawaian') 
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div> 
                                    @enderror
                                </div>
                                <div class="col-md-4 mt-2">
                                    <label for="bergabung" class="form-label"> Bergabung <span class="text-danger">*</span></label>
                                    <input type="date" name="bergabung" class="form-control @error('bergabung') is-invalid @enderror shadow-none" id="bergabung" value="{{ $detail_pegawai->bergabung }}">
                                    <p id="bergabung_error" class="text-danger" ></p>
                                    @error('bergabung') 
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div> 
                                    @enderror
                                </div>

                                <p class="text-primary mt-5"> Informasi Pendidikan </p>
                                <div class="col-md-3 mt-2">
                                    <label for="pendidikan_terakhir" class="form-label">Pendidikan Terakhir <span class="text-danger">*</span></label>
                                    <select class="form-select @error('pendidikan_terakhir') is-invalid @enderror" aria-label="Default select example" name="pendidikan_terakhir" id="pendidikan_terakhir">
                                        <option selected disabled>Pilih Pendidikan Terakhir</option>
                                        <option value="TIDAK SEKOLAH" {{ $detail_pegawai->pendidikan_terakhir == 'TIDAK SEKOLAH' ? 'selected' : '' }}>Tidak Sekolah</option>
                                        <option value="SD SEDERAJAT" {{ $detail_pegawai->pendidikan_terakhir == 'SD SEDERAJAT' ? 'selected' : '' }}>SD Sederajat</option>
                                        <option value="SMP SEDERAJAT" {{ $detail_pegawai->pendidikan_terakhir == 'SMP SEDERAJAT' ? 'selected' : '' }}>SMP Sederajat</option>
                                        <option value="SMA SEDERAJAT" {{ $detail_pegawai->pendidikan_terakhir == 'SMA SEDERAJAT' ? 'selected' : '' }}>SMA Sederajat</option>
                                        <option value="D3" {{ $detail_pegawai->pendidikan_terakhir == 'D3' ? 'selected' : '' }}>D3</option>
                                        <option value="D4" {{ $detail_pegawai->pendidikan_terakhir == 'D4' ? 'selected' : '' }}>D4</option>
                                        <option value="S1" {{ $detail_pegawai->pendidikan_terakhir == 'S1' ? 'selected' : '' }}>S1</option>
                                        <option value="S2" {{ $detail_pegawai->pendidikan_terakhir == 'S2' ? 'selected' : '' }}>S2</option>
                                        <option value="S3" {{ $detail_pegawai->pendidikan_terakhir == 'S3' ? 'selected' : '' }}>S3</option>
                                    </select>
                                    <p id="pendidikan_terakhir_error" class="text-danger" ></p>
                                    @error('pendidikan_terakhir') 
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div> 
                                    @enderror
                                </div>
                                <div class="col-md-3 mt-2">
                                    <label for="nama_instansi" class="form-label">Nama Instansi <span class="text-danger">*</span></label>
                                    <input type="text" name="nama_instansi" class="form-control @error('nama_instansi') is-invalid @enderror shadow-none" id="nama_instansi" value="{{ $detail_pegawai->nama_instansi }}" placeholder="Masukkan nama instansi">
                                    <p id="nama_instansi_error" class="text-danger" ></p>
                                    @error('nama_instansi') 
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div> 
                                    @enderror
                                </div>
                                <div class="col-md-3 mt-2">
                                    <label for="jurusan" class="form-label">Jurusan <span class="text-danger">*</span></label>
                                    <input type="text" name="jurusan" class="form-control @error('jurusan') is-invalid @enderror shadow-none" id="jurusan" value="{{ $detail_pegawai->jurusan }}" placeholder="Masukkan nama jurusan">
                                    <p id="jurusan_error" class="text-danger" ></p>
                                    @error('jurusan') 
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div> 
                                    @enderror
                                </div>
                                <div class="col-md-3 mt-2">
                                    <label for="tahun_lulus" class="form-label">Tahun Lulus <span class="text-danger">*</span></label>
                                    <input type="number" name="tahun_lulus" class="form-control @error('tahun_lulus') is-invalid @enderror shadow-none" id="tahun_lulus" value="{{ $detail_pegawai->tahun_lulus }}" placeholder="Masukkan tahun lulus">
                                    <p id="tahun_lulus_error" class="text-danger" ></p>
                                    @error('tahun_lulus') 
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div> 
                                    @enderror
                                </div>

                                <p class="text-primary mt-5"> Informasi Lainnya </p>
                                <div class="col-md-4 mt-2">
                                    <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror shadow-none" id="email" value="{{ $detail_pegawai->email }}" placeholder="Masukkan alamat email">
                                    <p id="email_error" class="text-danger" ></p>
                                    @error('email') 
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div> 
                                    @enderror
                                </div>
                                <div class="col-md-4 mt-2">
                                    <label for="no_telepon" class="form-label">No Telepon <span class="text-danger">*</span></label>
                                    <input type="number" name="no_telepon" class="form-control @error('no_telepon') is-invalid @enderror shadow-none" id="no_telepon" value="{{ $detail_pegawai->no_telepon }}" placeholder="Contoh : 6282.............">
                                    <p id="telepon_error" class="text-danger" ></p>
                                    @error('no_telepon') 
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div> 
                                    @enderror
                                </div>
                                <div class="col-md-4 mt-2">
                                    <label for="alamat" class="form-label">Alamat <span class="text-danger">*</span></label>
                                    <textarea name="alamat" id="alamat" class="form-control @error('alamat') is-invalid @enderror shadow-none" cols="1" rows="1" > {{ $detail_pegawai->alamat }} </textarea>
                                    <p id="alamat_error" class="text-danger" ></p>
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
    <script src="{{ asset('js/profile.js') }}"></script>
@endsection