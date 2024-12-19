<div class="modal fade" id="modalKamar" tabindex="-1" aria-labelledby="modalKamarLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form id="kamarForm" method="POST">
            @csrf
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="modalKamarLabel">Tambah Kamar</h5>
                    <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="id_kamar" name="id_kamar">
                    <div class="row">
                        <div class="col-8 mb-3">
                            <x-input-label for="nama_kamar" :value="__('Nama Kamar')" />
                            <input type="text" class="form-control" id="nama_kamar" name="nama_kamar" placeholder="Bayat" required>
                        </div>
                    <div class="col-4 mb-3">
                        <x-input-label for="lantai" :value="__('Lantai')" />
                        <input type="number" class="form-control" id="lantai" name="lantai" required>
                    </div>  

                    </div>
                    
                    <div class="row">
                      <div class="col-4 mb-3">
                        <x-input-label for="kapasitas" :value="__('Kapasitas')" />
                        <input type="number" class="form-control" id="kapasitas" name="kapasitas" required>
                    </div>
                    <div class="col-8 mb-3">
                        <x-input-label for="id_asrama" :value="__('Asrama')" />
                        <select class="form-select" id="id_asrama" name="id_asrama" required>
                            @foreach($asramas as $asrama)
                                <option value="{{ $asrama->id_asrama }}">{{ $asrama->nama_asrama }}</option>
                            @endforeach
                        </select>
                    </div>
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>
