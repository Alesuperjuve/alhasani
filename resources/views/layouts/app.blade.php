<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ config('app.name') }}</title>
    <x-linkcss />
    <!--  mendefinisikan variabel sweetAlertMessage agar sweet alert success berjalan lancar -->
      <script>
        var sweetAlertMessage = @json(session('sweetalert'));
      </script>
    <x-skrip-atas />
  </head>
  
  <body class="with-welcome-text">
    <div class="container-scroller">
      <x-selamatdatang />
      <div class="container-fluid page-body-wrapper">
        <x-sidebar-menu level="1" />
          <div class="main-panel">
            <div class="content-wrapper">
              <div class="row">
                <div class="col-sm-12">
                  <x-statistik />
                  {{ $slot }}
                </div>
              </div>
            </div>
          <x-footer :dataPesantren="$dataPesantren"/>
        </div>
      </div>
    </div>
    <!-- var kamarList dibikin json agar <x-skripbawah /> berjalan lancar -->
    <script>
        window.kamarList = @json($kamarList);
    </script>
    <x-skripbawah />
  </body>
</html>

<!-- Panggil Modal atau Offcanvas-->
@foreach (Config('listModal') as $modal)
    @include($modal)
@endforeach


