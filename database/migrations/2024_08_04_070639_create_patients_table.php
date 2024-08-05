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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap_pasien');
            $table->string('nomor_telepon_pasien');
            $table->enum('kriteria_pasien', ['Anak-Anak', 'Dewasa']);
            $table->text('alamat');
            $table->string('kecamatan');
            $table->string('provinsi');
            $table->date('tanggal_masuk');
            $table->date('tanggal_keluar');
            $table->text('foto_ktp_pasien');
            $table->text('foto_terbaru_pasien');
            $table->text('foto_kk');
            $table->text('foto_surat_rujukan');
            $table->text('foto_bpjs_kelas_tiga');
            $table->text('foto_skm')->nullable();
            $table->string('nama_lengkap_pendamping');
            $table->string('nomor_telepon_pendamping');
            $table->text('foto_terbaru_pendamping');
            $table->text('foto_ktp_pendamping');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
