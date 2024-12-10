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
          @include('layouts/selamat-datang')
         
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