<?php

namespace Database\Seeders;

use App\Models\Pegawai;
use Faker\Factory as Faker;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        Pegawai::create([
            'NIK' => $faker->numerify('################'),
            'NIP' => $faker->numerify('################'),
            'nama_lengkap' => 'Sumanto',
            'email' => 'sumanto@gmail.com',
            'no_telepon' => '6282132331949',
            'alamat' => $faker->address,
            'tempat_lahir' => $faker->city,
            'tanggal_lahir' => $faker->dateTimeBetween('-30 years', '-18 years')->format('Y-m-d'),
            'profile' => 'sumanto.jpg',
            'jenis_kelamin' => 'L',
            'agama' => $faker->randomElement(['Islam', 'Kristen', 'Katolik', 'Hindu', 'Buddha', 'Konghucu']),
            'status_menikah' => $faker->randomElement(['sudah menikah', 'belum menikah']),
            'status_kepegawaian' => $faker->randomElement(['PNS', 'CPNS', '-', 'LTH', 'PN', 'PPPK', 'Sukwan']),
            'pendidikan_terakhir' => $faker->randomElement(['SD', 'SMP', 'SMA', 'D3', 'S1', 'S2', 'S3']),
            'nama_instansi' => $faker->company,
            'jurusan' => $faker->word,
            'tahun_lulus' => $faker->randomElement([2018, 2019, 2020]),
            'peran' => 'Kepala Sekolah',
            'bergabung' =>  '2023-11-01',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Pegawai::create([
            'NIK' => $faker->numerify('################'),
            'NIP' => $faker->numerify('################'),
            'nama_lengkap' => 'Dewi Astuti',
            'email' => 'dewi_astuti@gmail.com',
            'no_telepon' => '6282132331949',
            'alamat' => $faker->address,
            'tempat_lahir' => $faker->city,
            'tanggal_lahir' => $faker->dateTimeBetween('-30 years', '-18 years')->format('Y-m-d'),
            'profile' => 'dewi_astuti.jpg',
            'jenis_kelamin' => 'P',
            'agama' => $faker->randomElement(['Islam', 'Kristen', 'Katolik', 'Hindu', 'Buddha', 'Konghucu']),
            'status_menikah' => $faker->randomElement(['sudah menikah', 'belum menikah']),
            'status_kepegawaian' => $faker->randomElement(['PNS', 'CPNS', '-', 'LTH', 'PN', 'PPPK', 'Sukwan']),
            'pendidikan_terakhir' => $faker->randomElement(['SD', 'SMP', 'SMA', 'D3', 'S1', 'S2', 'S3']),
            'nama_instansi' => $faker->company,
            'jurusan' => $faker->word,
            'tahun_lulus' => $faker->randomElement([2018, 2019, 2020]),
            'peran' => $faker->randomElement(['Guru', 'Administrasi', 'Security']),
            'bergabung' =>  '2023-10-31',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Pegawai::create([
            'NIK' => $faker->numerify('################'),
            'NIP' => $faker->numerify('################'),
            'nama_lengkap' => 'Margo',
            'email' => 'margo@gmail.com',
            'no_telepon' => '6282132331949',
            'alamat' => $faker->address,
            'tempat_lahir' => $faker->city,
            'tanggal_lahir' => $faker->dateTimeBetween('-30 years', '-18 years')->format('Y-m-d'),
            'profile' => 'margo.jpg',
            'jenis_kelamin' => 'P',
            'agama' => $faker->randomElement(['Islam', 'Kristen', 'Katolik', 'Hindu', 'Buddha', 'Konghucu']),
            'status_menikah' => $faker->randomElement(['sudah menikah', 'belum menikah']),
            'status_kepegawaian' => $faker->randomElement(['PNS', 'CPNS', '-', 'LTH', 'PN', 'PPPK', 'Sukwan']),
            'pendidikan_terakhir' => $faker->randomElement(['SD', 'SMP', 'SMA', 'D3', 'S1', 'S2', 'S3']),
            'nama_instansi' => $faker->company,
            'jurusan' => $faker->word,
            'tahun_lulus' => $faker->randomElement([2018, 2019, 2020]),
            'peran' => $faker->randomElement(['Guru', 'Administrasi', 'Security']),
            'bergabung' =>  '2023-10-31',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Pegawai::create([
            'NIK' => $faker->numerify('################'),
            'NIP' => $faker->numerify('################'),
            'nama_lengkap' => 'Bambang Prasetyo',
            'email' => 'bambang_prasetyo@gmail.com',
            'no_telepon' => '6282132331949',
            'alamat' => $faker->address,
            'tempat_lahir' => $faker->city,
            'tanggal_lahir' => $faker->dateTimeBetween('-30 years', '-18 years')->format('Y-m-d'),
            'profile' => 'bambang_prasetyo.jpg',
            'jenis_kelamin' => 'L',
            'agama' => $faker->randomElement(['Islam', 'Kristen', 'Katolik', 'Hindu', 'Buddha', 'Konghucu']),
            'status_menikah' => $faker->randomElement(['sudah menikah', 'belum menikah']),
            'status_kepegawaian' => $faker->randomElement(['PNS', 'CPNS', '-', 'LTH', 'PN', 'PPPK', 'Sukwan']),
            'pendidikan_terakhir' => $faker->randomElement(['SD', 'SMP', 'SMA', 'D3', 'S1', 'S2', 'S3']),
            'nama_instansi' => $faker->company,
            'jurusan' => $faker->word,
            'tahun_lulus' => $faker->randomElement([2018, 2019, 2020]),
            'peran' => $faker->randomElement(['Guru', 'Administrasi', 'Security']),
            'bergabung' =>  '2023-11-01',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Pegawai::create([
            'NIK' => $faker->numerify('################'),
            'NIP' => $faker->numerify('################'),
            'nama_lengkap' => 'Siti Aisyah',
            'email' => 'siti_aisyah@gmail.com',
            'no_telepon' => '6282132331949',
            'alamat' => $faker->address,
            'tempat_lahir' => $faker->city,
            'tanggal_lahir' => $faker->dateTimeBetween('-30 years', '-18 years')->format('Y-m-d'),
            'profile' => 'siti_aisyah.jpg',
            'jenis_kelamin' => 'P',
            'agama' => $faker->randomElement(['Islam', 'Kristen', 'Katolik', 'Hindu', 'Buddha', 'Konghucu']),
            'status_menikah' => $faker->randomElement(['sudah menikah', 'belum menikah']),
            'status_kepegawaian' => $faker->randomElement(['PNS', 'CPNS', '-', 'LTH', 'PN', 'PPPK', 'Sukwan']),
            'pendidikan_terakhir' => $faker->randomElement(['SD', 'SMP', 'SMA', 'D3', 'S1', 'S2', 'S3']),
            'nama_instansi' => $faker->company,
            'jurusan' => $faker->word,
            'tahun_lulus' => $faker->randomElement([2018, 2019, 2020]),
            'peran' => $faker->randomElement(['Guru', 'Administrasi', 'Security']),
            'bergabung' =>  '2023-12-31',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
    }
}
