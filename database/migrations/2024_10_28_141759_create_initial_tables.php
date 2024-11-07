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
        Schema::create('asrama', function (Blueprint $table) {
            $table->increments('id_asrama');
            $table->string('nama_asrama');
            $table->timestamps();
        });

        Schema::create('kamar', function (Blueprint $table) {
            $table->increments('id_kamar');
            $table->integer('id_asrama')->unsigned();
            $table->string('nama_kamar');
            $table->integer('kapasitas');
            $table->enum('lantai', ['1', '2', '3', '4', 'G', 'UG']);
            $table->timestamps();

            $table->foreign('id_asrama')->references('id_asrama')->on('asrama')->onDelete('cascade');
        });

        Schema::create('santri', function (Blueprint $table) {
            $table->increments('id_santri');
            $table->string('nama_santri');
            $table->integer('id_kamar')->unsigned();
            $table->string('nik', 20)->unique();
            $table->string('nis', 20)->unique();
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->string('foto')->nullable();
            $table->string('ktp')->nullable();
            $table->string('alamat');
            $table->string('kota', 20);
            $table->enum('pendidikan', ['MTS', 'MA', 'TAKHASSUS', 'LAINNYA']);
            $table->enum('kelas', ['7', '8', '9', '10', '11', '12', '00']);
            $table->date('tanggal_masuk_pondok');
            $table->date('tanggal_keluar_pondok')->nullable();
            $table->date('tanggal_masuk_mts')->nullable();
            $table->date('tanggal_masuk_ma')->nullable();
            $table->date('tanggal_lulus_mts')->nullable();
            $table->date('tanggal_lulus_ma')->nullable();
            $table->string('hp_santri', 100)->nullable();
            $table->string('hobi')->nullable();
            $table->string('email')->unique();
            $table->string('sekolah_asal')->nullable();
            $table->string('alamat_sekolah_asal')->nullable();
            $table->string('nama_ayah', 100);
            $table->enum('hidup_ayah', ['Hidup', 'Meninggal']);
            $table->string('kerja_ayah', 100)->nullable();
            $table->string('hp_ayah', 100);
            $table->string('nama_ibu', 100);
            $table->enum('hidup_ibu', ['Hidup', 'Meninggal']);
            $table->string('kerja_ibu', 100)->nullable();
            $table->string('hp_ibu', 100);
            $table->string('nama_wali', 100)->nullable();
            $table->string('status_wali', 20)->nullable();
            $table->string('hp_wali', 100)->nullable();
            $table->timestamps();

            $table->foreign('id_kamar')->references('id_kamar')->on('kamar')->onDelete('cascade');
        });

        Schema::create('pesantren', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_pesantren');
            $table->string('alamat_pesantren');
            $table->string('kota', 20);
            $table->string('hp_pesantren_1', 20)->nullable();
            $table->string('hp_pesantren_2', 20)->nullable();
            $table->string('email')->unique();
            $table->string('instagram')->unique();
            $table->string('web')->unique();
            $table->string('pengasuh');
            $table->string('lurah');
            $table->string('logo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('santri');
        Schema::dropIfExists('kamar');
        Schema::dropIfExists('asrama');
        Schema::dropIfExists('pesantren');
    }
};

