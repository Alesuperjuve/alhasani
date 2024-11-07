<ul class="navbar-nav">
            <li class="nav-item fw-semibold d-none d-lg-block ms-0">
              <h1 class="welcome-text">Selamat datang, <span class="text-black fw-bold">{{ Auth::user()->name}}</span></h1>
              <h3 class="welcome-sub-text">{{ $randomFruit }} </h3>
            </li>
          </ul>