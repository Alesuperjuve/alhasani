<div class="modal fade" id="tambahAsramaModal" tabindex="-1" aria-labelledby="tambahAsramaModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-white" id="tambahAsramaModalLabel">Form Asrama</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="asramaForm" action="{{ route('asrama.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="_method" id="methodInput">
                    <input type="hidden" name="id_asrama" id="id_asrama">
                    <div class="mb-3">
                        <label for="nama_asrama" class="form-label">Nama Asrama</label>
                        <input type="text" class="form-control" id="nama_asrama" name="nama_asrama" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
