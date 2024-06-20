<?php

namespace Database\Seeders;

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

        for ($i = 0; $i < 10; $i++) {
            DB::table('pegawais')->insert([
                'id' => (string) Str::uuid(),
                'NIK' => $faker->numerify('################'),
                'NIP' => $faker->numerify('################'),
                'nama_lengkap' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'no_telepon' => $faker->phoneNumber,
                'alamat' => $faker->address,
                'tempat_lahir' => $faker->city,
                'tanggal_lahir' => $faker->date(),
                'jenis_kelamin' => $faker->randomElement(['L', 'P']),
                'agama' => $faker->randomElement(['Islam', 'Kristen', 'Katolik', 'Hindu', 'Buddha', 'Konghucu']),
                'status_menikah' => $faker->randomElement(['sudah menikah', 'belum menikah']),
                'status_kepegawaian' => $faker->randomElement(['PNS', 'CPNS', '-', 'LTH', 'PN', 'PPPK', 'Sukwan']),
                'pendidikan_terakhir' => $faker->randomElement(['SD', 'SMP', 'SMA', 'D3', 'S1', 'S2', 'S3']),
                'nama_instansi' => $faker->company,
                'jurusan' => $faker->word,
                'tahun_lulus' => $faker->year,
                'peran' => $faker->randomElement(['Kepala Sekolah', 'Guru', 'Administrasi', 'Security']),
                'bergabung' =>  $faker->dateTimeBetween('2023-01-01', '2024-12-31')->format('Y-m-d'),
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
