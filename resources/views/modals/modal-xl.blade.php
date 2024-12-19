<div class="modal fade" id="modalForm" tabindex="-1" aria-labelledby="formLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <form method="POST" action="{{ route('santri.store') }}">
            @csrf
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h3 class="modal-title text-white" id="formLabel">Form Santri Baru PP Al-Hasani Kalibawang</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        @include('layouts/form-santri')

      </div>
      <div class="modal-footer bg-primary">
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-info">Simpan</button>
      </div>
    </div>
  </form>
  </div>
</div>