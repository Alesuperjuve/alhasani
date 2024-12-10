<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Helpers\FruitHelper;
use App\Models\Asrama;
use App\Models\Santri;
use App\Models\Kamar;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Data\sidebar; 

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(): void
    {
        // View composer untuk layout app.blade.php
        $this->composeRandomFruit();
        $this->composeAsramaList();
        $this->composeKamarData();
        $this->shareStatistics();
        $this->shareViewRooms();
        $this->panggilSidebar();
    }

    /**
     * View composer untuk random fruit.
     */
    private function composeRandomFruit()
    {
        View::composer('layouts.app', function ($view) {
            $view->with('randomFruit', FruitHelper::getRandomFruit());
        });
    }

    /**
     * View composer untuk list asrama.
     */
    private function composeAsramaList()
    {
        View::composer('layouts.app', function ($view) {
            $asramas = Asrama::orderBy('nama_asrama', 'asc')->get();
            $view->with('asramas', $asramas);
        });
    }

    /**
     * View composer untuk data kamar (tersisa dan penuh).
     */
    private function composeKamarData()
    {
        View::composer('layouts.app', function ($view) {
            $kamarData = Kamar::withCount(['santri as jumlah_santri' => function ($query) {
                $query->selectRaw('count(id_kamar)');
            }])->get();

            // Kamar dengan sisa kuota
            $kamarList = $kamarData->map(function ($kamar) {
                $kamar->sisaKuota = $kamar->kapasitas - $kamar->jumlah_santri;
                return $kamar;
            })->filter(function ($kamar) {
                return $kamar->sisaKuota > 0;
            })->sortBy('nama_kamar')->values()->toArray();

            // Kamar penuh
            $kamarPenuh = $kamarData->filter(function ($kamar) {
                return $kamar->kapasitas == $kamar->jumlah_santri;
            })->map(function ($kamar) {
                return [
                    'nama_kamar' => $kamar->nama_kamar,
                    'nama_asrama' => $kamar->asrama->nama_asrama,
                    'kapasitas' => $kamar->kapasitas,
                ];
            })->sortBy('nama_kamar')->toArray();

            // Kirim data ke view
            $view->with([
                'kamarList' => $kamarList,
                'kamarPenuh' => $kamarPenuh,
            ]);
        });
    }

    /**
     * Membagikan statistik utama ke semua view.
     */
    private function shareStatistics()
    {
        $currentYear = Carbon::now()->year;

        $totalSantri = Santri::count();
        $totalKamar = Kamar::count();
        $totalKapasitas = Kamar::sum('kapasitas');
        $kapasitasTerisi = Santri::whereNotNull('id_kamar')->count();
        $kapasitasSisa = $totalKapasitas - $kapasitasTerisi;
        $santriMasukTahunIni = Santri::whereYear('tanggal_masuk_pondok', $currentYear)->count();

        $statistik = [
            'MTS' => Santri::where('pendidikan', 1)->count(),
            'MA' => Santri::where('pendidikan', 2)->count(),
            'TAHFIDZ' => Santri::where('pendidikan', 3)->count(),
            'LAINNYA' => Santri::where('pendidikan', 99)->count(),

            'MTS_YEAR' => Santri::where('pendidikan', 1)->whereYear('tanggal_masuk_pondok', $currentYear)->count(),
            'MA_YEAR' => Santri::where('pendidikan', 2)->whereYear('tanggal_masuk_pondok', $currentYear)->count(),
            'TAHFIDZ_YEAR' => Santri::where('pendidikan', 3)->whereYear('tanggal_masuk_pondok', $currentYear)->count(),
            'LAINNYA_YEAR' => Santri::where('pendidikan', 99)->whereYear('tanggal_masuk_pondok', $currentYear)->count(),

            'MTS_L' => Santri::where('pendidikan', 1)->where('jenis_kelamin', 'L')->count(),
            'MA_L' => Santri::where('pendidikan', 2)->where('jenis_kelamin', 'L')->count(),
            'TAHFIDZ_L' => Santri::where('pendidikan', 3)->where('jenis_kelamin', 'L')->count(),
            'LAINNYA_L' => Santri::where('pendidikan', 99)->where('jenis_kelamin', 'L')->count(),

            'MTS_P' => Santri::where('pendidikan', 1)->where('jenis_kelamin', 'P')->count(),
            'MA_P' => Santri::where('pendidikan', 2)->where('jenis_kelamin', 'P')->count(),
            'TAHFIDZ_P' => Santri::where('pendidikan', 3)->where('jenis_kelamin', 'P')->count(),
            'LAINNYA_P' => Santri::where('pendidikan', 99)->where('jenis_kelamin', 'P')->count(),
        ];

        // Tambahkan data tambahan ke statistik
        $statistik = array_merge($statistik, [
            'totalSantri' => $totalSantri,
            'totalKamar' => $totalKamar,
            'totalKapasitas' => $totalKapasitas,
            'kapasitasTerisi' => $kapasitasTerisi,
            'kapasitasSisa' => $kapasitasSisa,
            'santriMasukTahunIni' => $santriMasukTahunIni,
        ]);

        View::share('statistik', $statistik);
    }

    /**
     * Membagikan data dari VIEW 'view_rooms' ke semua view.
     */
    private function shareViewRooms()
    {
        $viewRooms = DB::table('view_rooms')->orderBy('nama_kamar', 'asc')->get();
        view()->share('viewRooms', $viewRooms);
    }

     private function panggilSidebar(): void
{
    // Ambil data dari method getAll() di class sidebar
    $sidebarData = sidebar::getAll();

    // Pastikan data yang diterima berupa array
    if (is_array($sidebarData)) {
        // Share data sidebar ke semua view
        View::share('sidebarMenu', $sidebarData);
    } else {
        // Jika data tidak valid, bisa memberikan error atau penanganan lain
        abort(500, 'Data sidebar tidak valid!');
    }
}
}
