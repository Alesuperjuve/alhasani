<!DOCTYPE html>
<!-- File app.blade ini sementara dipake karena file yang lebih dinamis malah tidak running well di sisi server, setelah beberapa bagian dijadikan components. Jadi, file ini masuk ke gitignore dulu, soal nanti diupdate lagi gampang urusan entar
Ali Hifni 23 Desember 2024 -->

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ config('app.name') }}</title>

    <!-- Required meta tags -->
    <link rel="stylesheet" href="assets/staradmin/dist/assets/vendors/feather/feather.css">
    <link rel="stylesheet" href="assets/staradmin/dist/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/staradmin/dist/assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="assets/staradmin/dist/assets/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/staradmin/dist/assets/vendors/typicons/typicons.css">
    <link rel="stylesheet" href="assets/staradmin/dist/assets/vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="assets/staradmin/dist/assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="assets/staradmin/dist/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
    <!-- endinject -->
    <!--  mendefinisikan variabel sweetAlertMessage agar sweet alert success berjalan lancar -->
      <script>
        var sweetAlertMessage = @json(session('sweetalert'));
      </script>
  <!-- sweet alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <!-- Plugin css for this page -->
    <link rel="stylesheet" href="assets/staradmin/dist/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="assets/staradmin/dist/assets/js/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="assets/staradmin/dist/assets/css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="assets/staradmin/dist/assets/images/favicon.png" />
    <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/js-alhasani/detail-santri.js"></script>
  <script src="assets/js-alhasani/create-update-kamar.js"></script>
  <script src="assets/js-alhasani/sweet-alert-success.js"></script>
<!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
  

  </head>
  <body class="with-welcome-text">
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
          <div class="me-3">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
              <span class="icon-menu"></span>
            </button>
          </div>
          <div>
            <a class="navbar-brand brand-logo" href="index.html">
              <img src="assets/staradmin/dist/assets/images/logo-alhasani-digital.png" alt="logo" />
            </a>
            <a class="navbar-brand brand-logo-mini" href="index.html">
              <img src="assets/staradmin/dist/assets/images/logo-mini.svg" alt="logo" />
            </a>
          </div>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-top">
          <ul class="navbar-nav">
            <li class="nav-item fw-semibold d-none d-lg-block ms-0">
              <h1 class="welcome-text">Selamat datang, <span class="text-black fw-bold">{{ Auth::user()->name}}</span></h1>
              <h3 class="welcome-sub-text">{{ $randomFruit }} </h3>
            </li>
          </ul>
         
          <ul class="navbar-nav ms-auto">
            
            <li class="nav-item dropdown d-none d-lg-block">
              <a class="nav-link dropdown-bordered dropdown-toggle dropdown-toggle-split" id="messageDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false"> Pilih Bahasa </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
                
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis fw-medium text-dark">English</p>
                    
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis fw-medium text-dark">Bahasa Indonesia</p>
                 
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis fw-medium text-dark">Français </p>
                    
                  </div>
                </a>

              </div>
            </li>
            
            <li class="nav-item">
              <form class="search-form" action="#">
                <i class="icon-search"></i>
                <input type="search" class="form-control" placeholder="Search Here" title="Search here">
              </form>
            </li>

            <li class="nav-item dropdown d-none d-lg-block user-dropdown">
              <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <img class="img-xs rounded-circle" src="assets/staradmin/dist/assets/images/faces/goku.jpg" alt="Profile image"> </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">
                  <img class="img-md rounded-circle" src="assets/staradmin/dist/assets/images/faces/face8.jpg" alt="Profile image">
                  <p class="mb-1 mt-3 fw-semibold">{{ Auth::user()->name}}</p>
                  <p class="fw-light text-primary mb-0">{{ Auth::user()->email}}</p>
                </div>
                <a class="dropdown-item">
                  <i class="dropdown-item-icon mdi mdi-account-outline text-gray me-2"></i> Profil </a>
                <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-message-text-outline text-gray me-2"></i> Pesan</a>
                <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-calendar-check-outline text-gray me-2"></i> Aktivitas</a>
                <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-help-circle-outline text-gray me-2"></i> FAQ</a>
               
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();" class="dropdown-item"><i class="dropdown-item-icon mdi mdi-power text-danger me-2"></i>Keluar</a>
                        </form>
              </div>
            </li>
          </ul>
          
          
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        
        <x-sidebar-menu level="1" />

        
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-sm-12">
                <div class="home-tab">
                  <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                    <ul class="nav nav-tabs" role="tablist">
  <li class="nav-item">
    <a class="nav-link active ps-0" 
       id="home-tab" 
       data-bs-toggle="tab" 
       href="#overview" 
       role="tab" 
       aria-controls="overview" 
       aria-selected="true">
       Overview
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" 
       id="profile-tab" 
       data-bs-toggle="tab" 
       href="#audiences" 
       role="tab" 
       aria-selected="false">
       MTs Al-Hasani
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" 
       id="contact-tab" 
       data-bs-toggle="tab" 
       href="#demographics" 
       role="tab" 
       aria-selected="false">
       MA Al-Hasani
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" 
       id="contact-tab" 
       data-bs-toggle="tab" 
       href="#tahfidz" 
       role="tab" 
       aria-selected="false">
       Tahfidz
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link border-0" 
       id="disclaimer-tab" 
       data-bs-toggle="tab" 
       href="#disclaimer" 
       role="tab" 
       aria-selected="false">
       Disclaimer
    </a>
  </li>
</ul>

                    <div>
                      <div class="btn-wrapper">
                          <a href="#" class="btn btn-otline-dark align-items-center" 
data-bs-toggle="modal" 
data-bs-target="#modalForm">
    <i class="mdi mdi-account-plus"></i> Tambah Santri</a>
    <a href="#" class="btn btn-otline-dark align-items-center" 
data-bs-toggle="modal" 
data-bs-target="#modal-tambah-kamar">
    <i class="mdi mdi-apple-keyboard-control"></i> Tambah Kamar</a>
<a href="#" class="btn btn-otline-dark align-items-center" 
data-bs-toggle="modal" 
data-bs-target="#modal-cache">
    <i class="icon-printer"></i> Cetak</a>
<a href="#" class="btn btn-primary text-white me-0">
    <i class="icon-download"></i> Ekspor</a>
                      </div>
                    </div>
                  </div>
                  <div class="tab-content tab-content-basic">
                    <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="statistics-details d-flex align-items-center justify-content-between">
                            <div>
                              <p class="statistics-title">Santri Masuk</p>
                              <h3 class="rate-percentage">
                              {{ $statistik['santriMasukTahunIni'] }}</h3>
                              <p class="text-primary d-flex"></i><span>Tahun {{ now()->year }}</span></p>
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
                            <!-- <div class="d-none d-md-block">
                              <p class="statistics-title">Total (Rp)</p>
                              <h3 class="rate-percentage">12.760.000</h3>
                              <p class="text-success d-flex"><i class="mdi mdi-menu-down"></i><span>+0.8%</span></p>
                            </div>-->
                            <div class="d-none d-md-block">
                              <p class="statistics-title">Transaksi</p>
                              <h3 class="rate-percentage">{{ $statistik['MTS'] }}</h3>
                              <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>68.8</span></p>
                            </div> 

                          </div>
                        
                        </div>
                      </div>
                      
                        
                      
                      
                    </div>
                    <div class="tab-pane fade" id="audiences" role="tabpanel" aria-labelledby="audiences">
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="statistics-details d-flex align-items-center justify-content-between">
                            <div>
                              <p class="statistics-title">Santri Masuk</p>
                              <h3 class="rate-percentage">
                              {{ $statistik['MTS_YEAR'] }}</h3>
                              <p class="text-primary d-flex"></i><span>Tahun {{ now()->year }}</span></p>
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
                            <!-- <div class="d-none d-md-block">
                              <p class="statistics-title">Total (Rp)</p>
                              <h3 class="rate-percentage">12.760.000</h3>
                              <p class="text-success d-flex"><i class="mdi mdi-menu-down"></i><span>+0.8%</span></p>
                            </div>-->
                            <div class="d-none d-md-block">
                              <p class="statistics-title">Transaksi</p>
                              <h3 class="rate-percentage">999</h3>
                              <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>68.8</span></p>
                            </div> 

                          </div>
                        
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="demographics" role="tabpanel" aria-labelledby="demographics">
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="statistics-details d-flex align-items-center justify-content-between">
                            <div>
                              <p class="statistics-title">Santri Masuk</p>
                              <h3 class="rate-percentage">
                              {{ $statistik['MA_YEAR'] }}</h3>
                              <p class="text-primary d-flex"></i><span>Tahun {{ now()->year }}</span></p>
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
                            <!-- <div class="d-none d-md-block">
                              <p class="statistics-title">Total (Rp)</p>
                              <h3 class="rate-percentage">12.760.000</h3>
                              <p class="text-success d-flex"><i class="mdi mdi-menu-down"></i><span>+0.8%</span></p>
                            </div>-->
                            <div class="d-none d-md-block">
                              <p class="statistics-title">Transaksi</p>
                              <h3 class="rate-percentage">999</h3>
                              <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>68.8</span></p>
                            </div> 

                          </div>
                        
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="tahfidz" role="tabpanel" aria-labelledby="tahfidz">Konten Tahfidz
                    </div>
                    <div class="tab-pane fade" id="disclaimer" role="tabpanel" aria-labelledby="disclaimer"><ul class="list-arrow">
  <p><strong><mark class="bg-warning text-white">Next job buat programmer</mark></strong></p>
  <ol>
      <li><strong>Halaman Keuangan</strong>, ini bagian paling berat (butuh banyak nanya ke alhasani)</li>
      <li><strong>Group By </strong> di list Kamar Penuh</li>
      <li>Halaman Laporan Keuangan</li>
      <li>Edit Profil pondok, termasuk logo</li>
      <li>Halaman Cetak PDF</li>
      <li>Perbaiki struktur <strong>AppServiceProvider</strong></li>
      <li>Perbaikan struktur file dan coding, buat semua sistem array dengan style Laravel</li>
      <li>Perbaiki bagian <strong>migration</strong> dan <strong>seeder</strong></li>
      <li><del>Konfigurasi <strong>Vite</strong>, terutama di sisi server</del></li>
      <li>Perbaiki bagian upload foto dan dokumen, image belum tersimpan</li>
      <li>Menu untuk tanggal masuk dan keluar di MTS dan MA</li>
      <li>Enum untuk status dan pendidikan, ada yang belum fix di blade</li>
      <li>Perbaiki "Forking is not supported on this platform"</li>
      <li>Halaman Dasbor</li>
      <li><del>Sweet Alert</del></li>
      <li>Kartu Santri</li>
      <li>Tombol SEARCH di navigasi statistik</li>
      <li>Form Tambah santri dibuat alamat dinamis</li>
      <li>Edit Santri</li>
      <li>Pengaturan Hak Akses</li>
      <li>Data users dan pengurus</li>
      <li>LaporanController, di localhost running well tapi di server muncul error <mark class="bg-danger text-white">Target class [App\Http\Controllers\laporanController] does not exist.</mark></li>
      
    </ol>

</ul>
                    </div>
                </div>
                {{ $slot }}
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <x-footer :dataPesantren="$dataPesantren"/>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <!-- var kamarList dibikin json agar <x-skripbawah /> berjalan lancar -->
    <script>
        window.kamarList = @json($kamarList);
    </script>
    <script src="assets/staradmin/dist/assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="assets/staradmin/dist/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/staradmin/dist/assets/vendors/chart.js/chart.umd.js"></script>
    <script src="assets/staradmin/dist/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/staradmin/dist/assets/js/off-canvas.js"></script>
    <script src="assets/staradmin/dist/assets/js/template.js"></script>
    <script src="assets/staradmin/dist/assets/js/settings.js"></script>
    <script src="assets/staradmin/dist/assets/js/hoverable-collapse.js"></script>
    <script src="assets/staradmin/dist/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="assets/staradmin/dist/assets/js/jquery.cookie.js" type="text/javascript"></script>
    <script src="assets/staradmin/dist/assets/js/dashboard.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- <script src="assets/js/Chart.roundedBarCharts.js"></script> -->
  
  <!-- dari skrip bawah js -->
  <script src="assets/js-alhasani/select-kamar-asrama.js"></script>
  <script src="assets/js-alhasani/slide-doc.js"></script>
  <script src="assets/js-alhasani/data-santri-modalPindahKamar.js"></script>
    <!-- End custom js for this page-->
  </body>

</html>

<!-- Panggil Modal atau Offcanvas-->
@foreach (Config('listModal') as $modal)
    @include($modal)
@endforeach