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
                        