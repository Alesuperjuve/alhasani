<div class="home-tab">
    <!-- Header Tab dan Tombol Aksi -->
    <div class="d-sm-flex align-items-center justify-content-between border-bottom">
        <!-- Tab Navigation -->
        <ul class="nav nav-tabs" role="tablist">
            @foreach($menuStatistik as $itemstat)
                <li class="nav-item">
                    <a href="#{{ $itemstat['target'] }}"
                       class="{{ $itemstat['class'] }}" 
                       id="{{ $itemstat['id'] }}" 
                       data-bs-toggle="tab" 
                       role="tab" 
                       aria-controls="{{ $itemstat['target'] }}" 
                       aria-selected="{{ $itemstat['area'] }}">
                        {{ $itemstat['title'] }}
                    </a>
                </li>
            @endforeach
        </ul>

        <!-- Tombol Aksi -->
        <div>
            <div class="btn-wrapper">
                <a href="#" class="btn btn-otline-dark align-items-center" data-bs-toggle="modal" data-bs-target="#modalForm">
                    <i class="mdi mdi-account-plus"></i> Tambah Santri
                </a>
                <a href="#" class="btn btn-otline-dark align-items-center" data-bs-toggle="modal" data-bs-target="#modal-tambah-kamar">
                    <i class="mdi mdi-apple-keyboard-control"></i> Tambah Kamar
                </a>
                <a href="#" class="btn btn-otline-dark align-items-center" data-bs-toggle="modal" data-bs-target="#">
                    <i class="icon-printer"></i> Cetak
                </a>
                <a href="#" class="btn btn-primary text-white me-0">
                    <i class="icon-download"></i> Ekspor
                </a>
            </div>
        </div>
    </div>

    <!-- Tab Content -->
    <div class="tab-content tab-content-basic">
        <!-- Overview Tab -->
        <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">
            <div class="row">
                <div class="col-sm-12">
                    <div class="statistics-details d-flex align-items-center justify-content-between">
                        <div>
                            <p class="statistics-title">Santri Masuk</p>
                            <h3 class="rate-percentage">{{ $statistik['santriMasukTahunIni'] }}</h3>
                            <p class="text-primary d-flex"><span>Tahun {{ now()->year }}</span></p>
                        </div>
                        <div>
                            <p class="statistics-title">Total Santri</p>
                            <h3 class="rate-percentage">{{ $statistik['totalSantri'] }}</h3>
                            <p class="text-success d-flex"><i class="mdi mdi-menu-up"></i><span>+0.1%</span></p>
                        </div>
                        <div>
                            <p class="statistics-title">Kuota Kamar</p>
                            <h3 class="rate-percentage">{{ $statistik['totalKapasitas'] }}</h3>
                            <p class="text-danger d-flex"><span>Dari {{ $statistik['totalKamar'] }} Kamar</span></p>
                        </div>
                        <div>
                            <p class="statistics-title">Kuota Terisi</p>
                            <h3 class="rate-percentage">{{ $statistik['kapasitasTerisi'] }}</h3>
                            <p class="text-success d-flex">Sisa {{ $statistik['kapasitasSisa'] }}</p>
                        </div>
                        <div class="d-none d-md-block">
                            <p class="statistics-title">Transaksi</p>
                            <h3 class="rate-percentage">{{ $statistik['MTS'] }}</h3>
                            <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>68.8</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Audiences Tab -->
        <div class="tab-pane fade" id="audiences" role="tabpanel" aria-labelledby="audiences">
            <div class="row">
                <div class="col-sm-12">
                    <div class="statistics-details d-flex align-items-center justify-content-between">
                        <div>
                            <p class="statistics-title">Santri Masuk</p>
                            <h3 class="rate-percentage">{{ $statistik['MTS_YEAR'] }}</h3>
                            <p class="text-primary d-flex"><span>Tahun {{ now()->year }}</span></p>
                        </div>
                        <div>
                            <p class="statistics-title">Total Santri MTS</p>
                            <h3 class="rate-percentage">{{ $statistik['MTS'] }}</h3>
                            <p class="text-success d-flex"><i class="mdi mdi-menu-up"></i><span>2%</span></p>
                        </div>
                        <div>
                            <p class="statistics-title">Laki-laki</p>
                            <h3 class="rate-percentage">{{ $statistik['MTS_L'] }}</h3>
                            <p class="text-danger d-flex"><span>45%</span></p>
                        </div>
                        <div>
                            <p class="statistics-title">Perempuan</p>
                            <h3 class="rate-percentage">{{ $statistik['MTS_P'] }}</h3>
                            <p class="text-success d-flex">77%</p>
                        </div>
                        <div class="d-none d-md-block">
                            <p class="statistics-title">Transaksi</p>
                            <h3 class="rate-percentage">999</h3>
                            <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>68.8</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Demographics Tab -->
        <div class="tab-pane fade" id="demographics" role="tabpanel" aria-labelledby="demographics">
            <div class="row">
                <div class="col-sm-12">
                    <div class="statistics-details d-flex align-items-center justify-content-between">
                        <div>
                            <p class="statistics-title">Santri Masuk</p>
                            <h3 class="rate-percentage">{{ $statistik['MA_YEAR'] }}</h3>
                            <p class="text-primary d-flex"><span>Tahun {{ now()->year }}</span></p>
                        </div>
                        <div>
                            <p class="statistics-title">Total Santri MA</p>
                            <h3 class="rate-percentage">{{ $statistik['MA'] }}</h3>
                            <p class="text-success d-flex"><i class="mdi mdi-menu-up"></i><span>2%</span></p>
                        </div>
                        <div>
                            <p class="statistics-title">Laki-laki</p>
                            <h3 class="rate-percentage">{{ $statistik['MA_L'] }}</h3>
                            <p class="text-danger d-flex"><span>45%</span></p>
                        </div>
                        <div>
                            <p class="statistics-title">Perempuan</p>
                            <h3 class="rate-percentage">{{ $statistik['MA_P'] }}</h3>
                            <p class="text-success d-flex">77%</p>
                        </div>
                        <div class="d-none d-md-block">
                            <p class="statistics-title">Transaksi</p>
                            <h3 class="rate-percentage">999</h3>
                            <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>68.8</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tahfidz Tab -->
        <div class="tab-pane fade" id="tahfidz" role="tabpanel" aria-labelledby="tahfidz">
            Konten Tahfidz
        </div>

        <!-- Disclaimer Tab -->
        <div class="tab-pane fade" id="disclaimer" role="tabpanel" aria-labelledby="disclaimer">
            @include('konten/disclaimer')
        </div>
    </div>
</div>
