
    <div class="modal fade" id="modalPindahKamar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modal-pindah-kamar" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h5 class="modal-title text-white" id="nama-sankam"></h5>
                    <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <div class="row mt-2">
                            <div class="col-4">
                                <img src="-" class="img-fluid" alt="foto" id="foto-sankam">
                            </div>
                            <div class="col-8">
                                <div class="row">
                                    <p id="nik-sankam" class="text-danger"></p>
                                    <p id="kamar-sankam"></p>
                                </div>
                                <div class="row mt-0 pt-0">
                                    <form method="POST" action="{{ route('santri.updateKamar') }}">
    @csrf

    <input type="hidden" name="idsantri-sankam" id="idsantri-sankam" value="">
                                    <div class="col-10">
                                        <x-input-label for="asrama" :value="__('Pilih Asrama')" />
                                        <select class="form-select" id="pilih-asrama" name="id_asrama" required>
                                            <option selected disabled>Pilih Asrama</option>
                                            @foreach ($asramas as $asrama)
                                                <option value="{{ $asrama->id_asrama }}">{{ $asrama->nama_asrama }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-10">
                                        <x-input-label for="kamar" :value="__('Pilih Kamar')" />
                                        <select class="form-select" id="pilih-kamar" name="id_kamar" required>
                                            <option selected disabled>Pilih Kamar</option>
                                            @foreach ($viewRooms as $room)
                                                <option value="{{ $room->id_kamar }}">{{ $room->nama_kamar }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mt-3">
                                 
                                <p class="text-danger text-center m-1"><strong>KAMAR PENUH DAN TIDAK BISA DIISI LAGI</strong></p>
                                <table class="table table-responsive table-striped table-sm table-success ">
    <thead>
        <tr>
            <th class="text-center">NO</th>
            <th>NAMA</th>
            <th>KUOTA</th>
            <th>ASRAMA</th>
        </tr>
    </thead>
    <tbody>
        @php
            $hitung = 1; // Inisialisasi hitung
        @endphp
        @foreach($kamarPenuh as $kamar)
            <tr>
                <td class="text-center">{{ $hitung }}</td>
                <td>Kamar {{ ucwords(strtolower($kamar['nama_kamar'])) }}</td>
                <td>{{ $kamar['kapasitas'] }}</td>
                <td>{{ ucwords(strtolower($kamar['nama_asrama'])) }}</td>
            </tr>
            @php
                    $hitung++; // Increment counter
            @endphp
        @endforeach
    </tbody>
</table>


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
