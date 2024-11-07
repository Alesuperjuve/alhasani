
<div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
              <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                <use xlink:href="#bootstrap"></use></svg>
            </a>

            <!-- Logo -->
                <div class="shrink-0 flex items-center">
                            <img src="assets/img/logo-alhasani-digital.png" alt="">

                </div>

    
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0 ms-4">
              <li><a href="#" class="nav-link px-2 text-secondary">Dasbor</a></li>
              <li><a href="{{ route('pesantren') }}" class="nav-link px-2 text-white">Pesantren</a></li>
              <li><a href="{{ route('santri.index') }}" class="nav-link px-2 text-white">Santri</a></li>
              <li><a href="{{ route('kamar') }}" class="nav-link px-2 text-white">Kamar</a></li>
              <li><a href="{{ route('madrasah') }}" class="nav-link px-2 text-white">Madrasah</a></li>
              <li><a href="{{ route('keuangan') }}" class="nav-link px-2 text-white">Keuangan</a></li>
              <li><a href="{{ route('laporan') }}" class="nav-link px-2 text-white">Laporan</a></li>
              
              <li>
                  <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();" class="nav-link px-2 text-white">{{ __('Log Out') }}</a>
                        </form>
                  </li>
            </ul>
			
          </div>