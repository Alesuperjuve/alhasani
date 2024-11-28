<!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-category">www.alhasani.com</li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('dashboard') }}">
                <i class="mdi mdi-apps menu-icon"></i>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            <li class="nav-item nav-category">Pesantren</li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('pesantren') }}">
                <i class="mdi mdi-floor-plan menu-icon"></i>
                <span class="menu-title">Profil</span>
              </a>
            </li>

            <li class="nav-item nav-category">Sistem Manajemen</li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('santri.index') }}">
                <i class="mdi mdi-account-circle-outline menu-icon"></i>
                <span class="menu-title">Santri</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{ route('kamar') }}">
                <i class="mdi mdi-table menu-icon"></i>
                <span class="menu-title">Kamar</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{ route('keuangan') }}">
                <i class="mdi mdi-chart-line menu-icon"></i>
                <span class="menu-title">Keuangan</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{ route('madrasah') }}">
                <i class="mdi mdi-layers-outline menu-icon"></i>
                <span class="menu-title">Madrasah</span>
              </a>
            </li>

            <li class="nav-item nav-category">Dokumentasi</li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('laporan') }}">
                <i class="mdi mdi-card-text-outline menu-icon"></i>
                <span class="menu-title">Kartu</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('laporan') }}">
                <i class="mdi mdi-file-document menu-icon"></i>
                <span class="menu-title">Laporan</span>
              </a>
            </li>

          </ul>
        </nav>