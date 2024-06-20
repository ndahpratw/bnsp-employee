<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pegawais', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('NIK');
            $table->string('NIP')->nullable();
            $table->string('nama_lengkap');
            $table->string('email')->unique();
            $table->string('no_telepon');
            $table->text('alamat');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->string('profile')->nullable();
            $table->string('agama');
            $table->enum('status_menikah', ['sudah menikah', 'belum menikah']);
            $table->string('status_kepegawaian');
            $table->string('pendidikan_terakhir');
            $table->string('nama_instansi');
            $table->string('jurusan');
            $table->year('tahun_lulus');
            $table->date('bergabung');
            $table->enum('peran', ['Kepala Sekolah', 'Guru', 'Administrasi', 'Security']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pegawais');
    }
};
