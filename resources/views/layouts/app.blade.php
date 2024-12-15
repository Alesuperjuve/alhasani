<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ config('app.name') }}</title>

    @include('layouts/script-atas')
  

  </head>
  <body class="with-welcome-text">
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      @include('layouts/nav-kanan')
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
                    @include('layouts/overview')
                    <div>
                      <div class="btn-wrapper">
                          @include('layouts/tombol-kanan')
                      </div>
                    </div>
                  </div>
                  <div class="tab-content tab-content-basic">
                    <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">
                      <div class="row">
                        <div class="col-sm-12">
                          @include('layouts/statistik')
                        </div>
                      </div>
                      
                        
                      
                      
                    </div>
                    <div class="tab-pane fade" id="audiences" role="tabpanel" aria-labelledby="audiences">
                      <div class="row">
                        <div class="col-sm-12">
                          @include('layouts/statistik-mts')
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="demographics" role="tabpanel" aria-labelledby="demographics">
                      <div class="row">
                        <div class="col-sm-12">
                          @include('layouts/statistik-ma')
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="tahfidz" role="tabpanel" aria-labelledby="tahfidz">Konten Tahfidz
                    </div>
                    <div class="tab-pane fade" id="disclaimer" role="tabpanel" aria-labelledby="disclaimer">@include('konten/disclaimer')
                    </div>
                </div>
                {{ $slot }}
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              @include('layouts/footer');

            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    @include('layouts/script-bawah')
  </body>

</html>

<!-- Panggil Modal atau Offcanvas-->
@include('components/modal-xl')
@include('components/modal-kamar')
@include('components/modal-tambah-kamar')
@include('components/offcanvas')

@include('components/modal-cache')
@include('components/modalPenghuni')
@include('components/modalSlide')
@include('components/modalPindahKamar')
@include('layouts/modalEditPondok')


<!-- JavaScript untuk menentukan apakah modal berfungsi untuk CREATE atau UPDATE data -->
<script type="text/javascript">
  
document.addEventListener('DOMContentLoaded', function () {
    const editButtons = document.querySelectorAll('.edit-kamar');
    const form = document.getElementById('kamarForm');
    const modalLabel = document.getElementById('modalKamarLabel');
    const idInput = document.getElementById('id_kamar');
    const namaInput = document.getElementById('nama_kamar');
    const lantaiInput = document.getElementById('lantai');
    const kapasitasInput = document.getElementById('kapasitas');
    const asramaSelect = document.getElementById('id_asrama');

    // Ketika tombol Edit diklik
    editButtons.forEach(button => {
        button.addEventListener('click', function () {
            // Isi input dengan data kamar
            idInput.value = this.dataset.id;
            namaInput.value = this.dataset.nama;
            lantaiInput.value = this.dataset.lantai;
            kapasitasInput.value = this.dataset.kapasitas;
            asramaSelect.value = this.dataset.id_asrama;

            // Ubah modal menjadi "Edit Kamar"
            modalLabel.textContent = 'Edit Kamar';

            // Atur action form untuk route UPDATE
            form.action = `{{ route('kamar.update', ':id') }}`.replace(':id', this.dataset.id);
            form.method = 'POST';

            // Tambahkan input hidden untuk PUT
            if (!form.querySelector('input[name="_method"]')) {
                form.insertAdjacentHTML('beforeend', '<input type="hidden" name="_method" value="PUT">');
            }
        });
    });

    // Reset form saat modal ditutup
    document.getElementById('modalKamar').addEventListener('hidden.bs.modal', function () {
        idInput.value = '';
        namaInput.value = '';
        lantaiInput.value = '';
        kapasitasInput.value = '';
        asramaSelect.value = '';
        modalLabel.textContent = 'Tambah Kamar';

        // Reset action form ke route CREATE
        form.action = form.getAttribute('data-action');
        form.method = 'POST';

        // Hapus input hidden PUT jika ada
        const methodInput = form.querySelector('input[name="_method"]');
        if (methodInput) methodInput.remove();
    });
});

</script>
