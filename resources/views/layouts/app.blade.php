<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ config('app.name') }}</title>

    @include('layouts/alh-script')
  

  </head>
  <body class="with-welcome-text">
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      @include('layouts/alh-nav-kanan')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        @include('layouts/alh-sidebar')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-sm-12">
                <div class="home-tab">
                  <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                    @include('layouts/alh-overview')
                    <div>
                      <div class="btn-wrapper">
                          @include('layouts.alh-tombol-kanan')
                      </div>
                    </div>
                  </div>
                  <div class="tab-content tab-content-basic">
                    <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">
                      <div class="row">
                        <div class="col-sm-12">
                          @include('layouts/alh-statistik')
                        </div>
                      </div>
                      
                        {{ $slot }}
                      
                      
                    </div>
                    <div class="tab-pane fade" id="audiences" role="tabpanel" aria-labelledby="audiences">tes audiences
                    </div>
                    <div class="tab-pane fade" id="demographics" role="tabpanel" aria-labelledby="demographics">tes demographics
                    </div>
                    <div class="tab-pane fade" id="disclaimer" role="tabpanel" aria-labelledby="disclaimer">@include('konten/disclaimer')
                    </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              @include('layouts/alh-footer');

            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    @include('layouts/alh-script-bawah')
  </body>

</html>

<!-- Panggil Modal atau Offcanvas-->
@include('components/modal-xl')
@include('components/modal-kamar')
@include('components/offcanvas')

