<form method="POST" action="{{ route('kamar.store') }}">
    @csrf
    <div class="modal fade" id="modal-tambah-kamar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modal-tambah-kamar" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h5 class="modal-title text-white" id="modal-tambah-kamar">Form Kamar</h5>
                    <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-8">
                                <x-input-label for="namaKamar" :value="__('Nama Kamar')" />
                                <input type="text" class="form-control" id="namaKamar" name="nama_kamar" placeholder="Diponegoro" required>
                            </div>
                            <div class="col-4">
                                <x-input-label for="kapasitas" :value="__('Kapasitas')" />
                                <input type="number" class="form-control" id="kapasitas" name="kapasitas" placeholder="10" required>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-4">
                                <x-input-label for="lantai" :value="__('Lantai')" />
                                <input type="number" class="form-control" id="lantai" name="lantai" placeholder="2" required>
                            </div>
                            <div class="col-8">
                                <x-input-label for="asrama" :value="__('Asrama')" />
                                <select class="form-select" id="asrama" name="id_asrama" required>
                                    <option selected disabled>Pilih Asrama</option>
                                    @foreach ($asramas as $asrama)
                                    <option value="{{ $asrama->id_asrama }}">{{ $asrama->nama_asrama }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </div>
</form>
