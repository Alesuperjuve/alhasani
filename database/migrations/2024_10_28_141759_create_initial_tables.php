<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('asrama', function (Blueprint $table) {
            $table->increments('id_asrama')->unsigned();
            $table->string('nama_asrama');
            $table->timestamps();
        });

        Schema::create('kamar', function (Blueprint $table) {
            $table->increments('id_kamar')->unsigned();
            $table->integer('id_asrama')->unsigned();
            $table->string('nama_kamar');
            $table->integer('kapasitas');
            $table->enum('lantai', ['1', '2', '3', '4']);
            $table->timestamps();

            $table->foreign('id_asrama')->references('id_asrama')->on('asrama')->onDelete('cascade');
        });

        Schema::create('santri', function (Blueprint $table) {
            $table->increments('id_santri')->unsigned();
            $table->string('nama_santri');
            $table->integer('id_kamar')->unsigned()->nullable();
            $table->string('nik', 20)->nullable();
            $table->string('nisn', 20)->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->enum('jenis_kelamin', ['L', 'P'])->nullable();
            $table->string('foto')->nullable();
            $table->string('ktp')->nullable();
            $table->string('kk')->nullable();
            $table->string('ijazah')->nullable();
            $table->string('alamat')->nullable();
            $table->string('kota', 20)->nullable();
            $table->enum('status', ['R', 'SR', 'S']);
            $table->enum('pendidikan', ['1', '2', '3', '99']);
            $table->enum('kelas', ['7', '8', '9', '10', '11', '12', '00'])->nullable();
            $table->date('tanggal_masuk_pondok')->nullable();
            $table->date('tanggal_keluar_pondok')->nullable();
            $table->date('tanggal_masuk_mts')->nullable();
            $table->date('tanggal_keluar_mts')->nullable();
            $table->date('tanggal_masuk_ma')->nullable();
            $table->date('tanggal_keluar_ma')->nullable();
            $table->string('sekolah_asal', 50)->nullable();
            $table->string('alamat_sekolah_asal', 50)->nullable();
            $table->string('hp_santri', 100)->nullable();
            $table->string('hobi')->nullable();
            $table->string('email')->nullable();
            $table->string('nama_ayah')->nullable();
            $table->string('hidup_ayah')->nullable();
            $table->string('kerja_ayah')->nullable();
            $table->string('hp_ayah')->nullable();
            $table->string('nama_ibu')->nullable();
            $table->string('hidup_ibu')->nullable();
            $table->string('kerja_ibu')->nullable();
            $table->string('hp_ibu')->nullable();
            $table->string('nama_wali')->nullable();
            $table->enum('status_wali', ['0','1', '2', '3', '4','5','6','7'])->default('0');
            $table->string('hp_wali')->nullable();
            $table->timestamps();

            $table->foreign('id_kamar')->references('id_kamar')->on('kamar')->onDelete('cascade');
        });

        Schema::create('pesantren', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('nama_pesantren');
            $table->string('alamat_pesantren');
            $table->string('pengasuh');
            $table->string('lurah');
            $table->string('kota', 20);
            $table->string('hp_pesantren_1', 20)->nullable();
            $table->string('hp_pesantren_2', 20)->nullable();
            $table->string('instagram');
            $table->string('web');
            $table->string('email');
            $table->string('logo');
            $table->timestamps();
        });

        // View: view_kamarsantri
        DB::statement("
            CREATE VIEW IF NOT EXISTS view_kamarsantri AS
            SELECT kamar.id_kamar, kamar.nama_kamar, kamar.lantai, kamar.kapasitas, COUNT(santri.id_santri) AS jumlah_penghuni
            FROM kamar
            LEFT JOIN santri ON kamar.id_kamar = santri.id_kamar
            GROUP BY kamar.id_kamar, kamar.nama_kamar, kamar.lantai, kamar.kapasitas
        ");

        // View: view_rooms
        DB::statement("
            CREATE VIEW IF NOT EXISTS view_rooms AS
            SELECT kamar.id_kamar, kamar.nama_kamar, (kamar.kapasitas - COUNT(santri.id_santri)) AS sisaKuota
            FROM kamar
            LEFT JOIN santri ON kamar.id_kamar = santri.id_kamar
            GROUP BY kamar.id_kamar, kamar.nama_kamar, kamar.kapasitas
        ");
    }

    public function down(): void
    {
        // Drop Views
        DB::statement('DROP VIEW IF EXISTS view_rooms');
        DB::statement('DROP VIEW IF EXISTS view_kamarsantri');

        // Drop Tables in reverse order
        Schema::table('santri', function (Blueprint $table) {
            $table->dropForeign(['id_kamar']);
        });

        Schema::table('kamar', function (Blueprint $table) {
            $table->dropForeign(['id_asrama']);
        });

        Schema::dropIfExists('santri');
        Schema::dropIfExists('kamar');
        Schema::dropIfExists('asrama');
        Schema::dropIfExists('pesantren');
    }
};
