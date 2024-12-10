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
                        