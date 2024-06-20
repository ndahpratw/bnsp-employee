<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $title = 'Dashboard';
        $jumlah_pegawai = Pegawai::count();

        // grafik waktu bergabung
        $data_waktu_bergabung_per_bulan = Pegawai::selectRaw('DATE_FORMAT(bergabung, "%Y-%m") as bulan, COUNT(*) as jumlah_pegawai')
        ->groupBy('bulan')
        ->orderBy('bulan', 'asc')
        ->get();

        $waktu_bergabung = [];
        $jumlah_pegawai_per_bulan = [];

        foreach ($data_waktu_bergabung_per_bulan as $item) {
            $waktu_bergabung[] = date('M Y', strtotime($item->bulan . '-01')); // Format bulan dan tahun
            $jumlah_pegawai_per_bulan[] = $item->jumlah_pegawai;
        }


        // grafik jenis kelamin
        $data = Pegawai::selectRaw('jenis_kelamin, COUNT(*) as jumlah_data')
        ->groupBy('jenis_kelamin')
        ->get();

        $jenis_kelamin = [];
        $jumlah_data_jenis_kelamin = [];

        foreach ($data as $item) {
            $jenis_kelamin[] = $item->jenis_kelamin;
            $jumlah_data_jenis_kelamin[] = $item->jumlah_data;
        }

        // status kepegawaian guru
        $data_kepegawaian = Pegawai::selectRaw('status_kepegawaian, COUNT(*) as data_kepegawaian')
        ->groupBy('status_kepegawaian')
        ->orderBy('status_kepegawaian')
        ->get();

        $status_kepegawaian = [];
        $jumlah_data_kepegawaian = [];

        foreach ($data_kepegawaian as $item) {
            $status_kepegawaian[] = $item->status_kepegawaian;
            $jumlah_data_kepegawaian[] = $item->data_kepegawaian;
        }

        // status pendidikan terakhir
        $data_pendidikan= Pegawai::selectRaw('pendidikan_terakhir, COUNT(*) as data_pendidikan')
        ->groupBy('pendidikan_terakhir')
        ->orderBy('pendidikan_terakhir')
        ->get();


        $pendidikan_terakhir = [];
        $jumlah_data_pendidikan_terakhir = [];

        foreach ($data_pendidikan as $item) {
            $pendidikan_terakhir[] = $item->pendidikan_terakhir;
            $jumlah_data_pendidikan_terakhir[] = $item->data_pendidikan;
        }
        
        return view('admin.dashboard', compact(
            'title', 'jumlah_pegawai',
            'waktu_bergabung', 'jumlah_pegawai_per_bulan',
            'jenis_kelamin', 'jumlah_data_jenis_kelamin',
            'status_kepegawaian', 'jumlah_data_kepegawaian',
            'pendidikan_terakhir', 'jumlah_data_pendidikan_terakhir'
        ));
    }

    public function landing() {
        $kepala_sekolah = Pegawai::where('peran', 'Kepala Sekolah')->first();
        $data_pegawai = Pegawai::where('peran', '!=', 'Kepala Sekolah')->get();
        return view('index', compact('kepala_sekolah', 'data_pegawai'));
    }
}
