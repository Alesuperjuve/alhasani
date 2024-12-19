<div>
    <!-- Nav Tabs -->
    <ul class="nav nav-pills nav-pills-custom mb-3" id="pills-tab" role="tablist">
        @foreach($asramas as $index => $asrama)
            <li class="nav-item" role="presentation">
                <button 
                    class="nav-link {{ $index === 0 ? 'active' : '' }}" 
                    id="pills-{{ $asrama->id_asrama }}-tab" 
                    data-bs-toggle="pill" 
                    data-bs-target="#pills-{{ $asrama->id_asrama }}" 
                    type="button" 
                    role="tab" 
                    aria-controls="pills-{{ $asrama->id_asrama }}" 
                    aria-selected="{{ $index === 0 ? 'true' : 'false' }}">
                    {{ "Asrama " . $asrama->nama_asrama }}
                </button>
            </li>
        @endforeach

        <li class="nav-item" role="presentation">
            <button 
                class="nav-link" 
                id="set-tab" 
                data-bs-toggle="pill" 
                data-bs-target="#set-asrama" 
                type="button" 
                role="tab" 
                aria-controls="set-asrama" 
                aria-selected="false">
                Set Asrama
            </button>
        </li>
    </ul>

    <!-- Tab Content -->
    <div class="tab-content" id="pills-tabContent">
        @foreach($asramas as $index => $asrama)
            <div 
                class="tab-pane fade {{ $index === 0 ? 'show active' : '' }}" 
                id="pills-{{ $asrama->id_asrama }}" 
                role="tabpanel" 
                aria-labelledby="pills-{{ $asrama->id_asrama }}-tab">
                <table class="table table-bordered table-responsive table-striped table-hover">
                    <thead>
                        <tr>
                            <th class="text-center">NO</th>
                            <th class="text-center">NAMA KAMAR</th>
                            <th class="text-center">LANTAI</th>
                            <th class="text-center">KAPASITAS</th>
                            <th class="text-center">TERISI</th>
                            <th class="text-center">DETAIL</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($asrama->kamar as $key => $kamar)
                            <tr>
                                <td class="text-center">{{ $key + 1 }}</td>
                                <td>
                                    <a 
                                        href="#" 
                                        class="text-decoration-none text-primary edit-kamar" 
                                        data-bs-toggle="modal" 
                                        data-bs-target="#modalKamar" 
                                        data-id="{{ $kamar->id_kamar }}" 
                                        data-nama="{{ $kamar->nama_kamar }}" 
                                        data-lantai="{{ $kamar->lantai }}" 
                                        data-kapasitas="{{ $kamar->kapasitas }}" 
                                        data-id_asrama="{{ $kamar->id_asrama }}"
                                        data-url="{{ route('kamar.update', $kamar->id_kamar) }}">
                                        KAMAR {{ strtoupper($kamar->nama_kamar) }}
                                    </a>
                                </td>
                                <td class="text-center">{{ $kamar->lantai }}</td>
                                <td class="text-center">{{ $kamar->kapasitas }}</td>
                                <td class="text-center">{{ $kamar->terisi }}</td>
                                <td class="text-center">
                                    <a 
                                        href="#" 
                                        data-bs-toggle="modal" 
                                        data-bs-target="#modalPenghuni" 
                                        data-nama-kamar="{{ $kamar->nama_kamar }}" 
                                        data-detail-santri="{{ json_encode($kamar->detail_santri) }}">
                                        <div class="badge badge-opacity-primary me-3">Lihat Penghuni</div>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endforeach

        <div class="tab-pane fade" id="set-asrama" role="tabpanel" aria-labelledby="set-tab">
            <div class="row">
                <div class="col-8"></div>
                <div class="col-4 p-2">
                    <button 
                        class="btn btn-primary btn-sm text-white pull-right me-2" 
                        data-bs-toggle="modal" 
                        data-bs-target="#tambahAsramaModal">
                        <i class="mdi mdi-apple-keyboard-shift"></i> Tambah Asrama
                    </button>
                </div>
            </div>
            <x-tabel-asrama :asramas="$asramas" />
        </div>
    </div>
</div>

<!-- Modal untuk tambah asrama -->
@include('layouts.modal-asrama')

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif


<!-- JavaScript Edit Asrama -->

<script>
document.addEventListener('DOMContentLoaded', function () {
    const editLinks = document.querySelectorAll('.edit-asrama');
    const form = document.getElementById('asramaForm');
    const idInput = document.getElementById('id_asrama');
    const namaInput = document.getElementById('nama_asrama');
    const modalTitle = document.getElementById('tambahAsramaModalLabel');

    editLinks.forEach(link => {
        link.addEventListener('click', function () {
            // Ambil data dari atribut
            const id = this.dataset.id;
            const nama = this.dataset.nama;

            // Isi input di dalam modal
            idInput.value = id;
            namaInput.value = nama;

            // Ubah judul modal untuk Edit
            modalTitle.textContent = 'Edit Asrama';

            // Ubah action form untuk mengarahkan ke update
            form.action = `{{ route('asrama.update', ':id') }}`.replace(':id', id); // Mengarah ke route update
            form.method = 'POST'; // Method override untuk PUT
            form.insertAdjacentHTML('beforeend', '<input type="hidden" name="_method" value="PUT">'); // Tambahkan method override
        });
    });

    // Reset form ketika modal ditutup
    document.getElementById('tambahAsramaModal').addEventListener('hidden.bs.modal', function () {
        idInput.value = '';
        namaInput.value = '';
        modalTitle.textContent = 'Tambah Asrama';
        form.action = '{{ route('asrama.store') }}'; // Kembali ke route store
        const methodInput = form.querySelector('input[name="_method"]');
        if (methodInput) methodInput.remove();
    });
});
</script>

<!-- JavaScript yang akan menangkap klik pada tombol/link dan memuat nama-nama santri ke dalam modal. -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
    const penghuniLinks = document.querySelectorAll('a[data-bs-target="#modalPenghuni"]');

    penghuniLinks.forEach(link => {
        link.addEventListener('click', function () {
            // Ambil data dari atribut data
            const namaKamar = this.getAttribute('data-nama-kamar');
            const detailSantriJSON = this.getAttribute('data-detail-santri');

            // Decode JSON menjadi array
            const detailSantri = detailSantriJSON ? JSON.parse(detailSantriJSON) : [];

            // Cari elemen modal title dan tbody
            const modalTitle = document.querySelector('#modalPenghuni .modal-title');
            const modalTableBody = document.querySelector('#modalTableBody');

            // Masukkan nama kamar ke dalam modal title
            modalTitle.textContent = 'Kamar ' + namaKamar;

            // Bersihkan isi tabel sebelumnya
            modalTableBody.innerHTML = '';

            if (detailSantri.length > 0) {
                // Masukkan data ke tabel
                detailSantri.forEach((santri, index) => {
                    const row = `
                        <tr>
                            <td class="text-center">${index + 1}</td>
                            <td>${santri.nik}</td>
                            <td>${santri.nama_santri}</td>
                            <td>${santri.kota}</td>
                        </tr>
                    `;
                    modalTableBody.innerHTML += row;
                });
            } else {
                // Jika tidak ada penghuni, tambahkan baris kosong
                modalTableBody.innerHTML = `
                    <tr>
                        <td colspan="5" class="text-center">Tidak ada penghuni</td>
                    </tr>
                `;
            }
        });
    });
});


</script>

