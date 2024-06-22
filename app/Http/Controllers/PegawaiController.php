<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PegawaiController extends Controller
{
    public function index() {
        $no = 1;
        $title = 'Data Pegawai';
        $data_pegawai = Pegawai::orderBy('created_at', 'desc')->get();
        return view('admin.pegawai.index', compact('no', 'title', 'data_pegawai'));
    }

    public function create() {
        $title = 'Data Pegawai / Staff';
        $sub_title = 'Tambah Data';
        return view('admin.pegawai.tambah-data', compact('title', 'sub_title'));
    }

    public function store(Request $request) {
        $request->validate([
            'nama_lengkap' => 'required',
            'NIK' => 'required|digits:16|unique:pegawai',
            'email' => 'required|email|unique:pegawais',
            'no_telepon' => 'required|digits:13',
            'alamat' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'status_menikah' => 'required',
            'status_kepegawaian' => 'required',
            'pendidikan_terakhir' => 'required',
            'nama_instansi' => 'required',
            'jurusan' => 'required',
            'tahun_lulus' => 'required|digits:4|digits:4',
            'bergabung' => 'required',
            'peran' => 'required',
        ]);

        if ($request->hasFile('profile')) {
            $profileImage = $request->file('profile');
            $imageName = $request->NIK . '_' . $request->nama_lengkap . '.' . $profileImage->extension();
            $profileImage->move(public_path('assets/img/profile-pegawai/'), $imageName);
        } else {
            $imageName = null;
        }

        $pegawai_baru = new Pegawai();
        $pegawai_baru->NIP = $request->NIP;
        $pegawai_baru->NIK = $request->NIK;
        $pegawai_baru->nama_lengkap = $request->nama_lengkap;
        $pegawai_baru->email = $request->email;
        $pegawai_baru->no_telepon = $request->no_telepon;
        $pegawai_baru->alamat = $request->alamat;
        $pegawai_baru->tempat_lahir = $request->tempat_lahir;
        $pegawai_baru->tanggal_lahir = $request->tanggal_lahir;
        $pegawai_baru->jenis_kelamin = $request->jenis_kelamin;
        $pegawai_baru->profile = $imageName;
        $pegawai_baru->agama = $request->agama;
        $pegawai_baru->status_menikah = $request->status_menikah;
        $pegawai_baru->status_kepegawaian = $request->status_kepegawaian;
        $pegawai_baru->pendidikan_terakhir = $request->pendidikan_terakhir;
        $pegawai_baru->nama_instansi = $request->nama_instansi;
        $pegawai_baru->jurusan = $request->jurusan;
        $pegawai_baru->tahun_lulus = $request->tahun_lulus;
        $pegawai_baru->bergabung = $request->bergabung;
        $pegawai_baru->peran = $request->peran;


        if ($pegawai_baru->save()) {
            return redirect(route('pegawai.index'))->with('success', 'Data berhasil disimpan!');
        } else {
            return redirect(route('pegawai.index'))->with('error', 'Gagal menyimpan data');
        }
    }

    public function show($id) {
        $title = 'Data Pegawai';
        $sub_title = 'Detail Data';
        $detail_pegawai = Pegawai::find($id);
        return view('admin.pegawai.detail-data', compact('title', 'sub_title', 'detail_pegawai'));
    }

    public function edit($id) {
        $title = 'Data Pegawai';
        $sub_title = 'Edit Data';
        $detail_pegawai = Pegawai::find($id);
        return view('admin.pegawai.edit-data', compact('title', 'sub_title', 'detail_pegawai'));
    }

    public function update(Request $request, $id) {
        $request->validate([
            'nama_lengkap' => 'required',
            'NIK' => 'required|digits:16|unique:pegawai',
            'email' => 'required|email',
            'no_telepon' => 'required|digits:13',
            'alamat' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'status_menikah' => 'required',
            'status_kepegawaian' => 'required',
            'pendidikan_terakhir' => 'required',
            'nama_instansi' => 'required',
            'jurusan' => 'required',
            'tahun_lulus' => 'required|digits:4',
            'bergabung' => 'required',
            'peran' => 'required',
        ]);

        $pegawai = Pegawai::find($id);

        if ($request->hasFile('profile')) {
            if ($pegawai->profile && file_exists(public_path('assets/img/profile-pegawai/' . $pegawai->profile))) {
                unlink(public_path('assets/img/profile-pegawai/' . $pegawai->profile));
            }
            $profileImage = $request->file('profile');
            $imageName = $request->NIK . '_' . $request->nama_lengkap . '.' . $profileImage->extension();
            $profileImage->move(public_path('assets/img/profile-pegawai/'), $imageName);
        } else {
            $imageName = $pegawai->profile;
        }

        $pegawai->NIP = $request->NIP;
        $pegawai->NIK = $request->NIK;
        $pegawai->nama_lengkap = $request->nama_lengkap;
        $pegawai->email = $request->email;
        $pegawai->no_telepon = $request->no_telepon;
        $pegawai->alamat = $request->alamat;
        $pegawai->tempat_lahir = $request->tempat_lahir;
        $pegawai->tanggal_lahir = $request->tanggal_lahir;
        $pegawai->jenis_kelamin = $request->jenis_kelamin;
        $pegawai->profile = $imageName;
        $pegawai->agama = $request->agama;
        $pegawai->status_menikah = $request->status_menikah;
        $pegawai->status_kepegawaian = $request->status_kepegawaian;
        $pegawai->pendidikan_terakhir = $request->pendidikan_terakhir;
        $pegawai->nama_instansi = $request->nama_instansi;
        $pegawai->jurusan = $request->jurusan;
        $pegawai->tahun_lulus = $request->tahun_lulus;
        $pegawai->bergabung = $request->bergabung;
        $pegawai->peran = $request->peran;


        if ($pegawai->save()) {
            return redirect(route('pegawai.index'))->with('success', 'Data berhasil diperbarui !');
        } else {
            return redirect(route('pegawai.index'))->with('error', 'Gagal menyimpan data');
        }
    }

    public function destroy($id) {
        $pegawai = Pegawai::find($id);
        if ($pegawai->profile) {
            $fotoPath = public_path('assets/img/profile-pegawai/' . $pegawai->profile);

            if (file_exists($fotoPath)) {
                unlink($fotoPath);
            }
        }

        if ($pegawai->delete()){
            return redirect()->back()->with('success', 'Data berhasil dihapus!');
        } else {
            return redirect()->back()->with('error', 'Gagal menghapus data');
        } 
    }
}
