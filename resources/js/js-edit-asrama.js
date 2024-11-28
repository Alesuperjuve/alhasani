document.addEventListener('DOMContentLoaded', function () {
    const editLinks = document.querySelectorAll('.edit-asrama');
    const form = document.getElementById('asramaForm');
    const idInput = document.getElementById('id_asrama');
    const namaInput = document.getElementById('nama_asrama');
    const modalTitle = document.getElementById('tambahAsramaModalLabel');
    const methodInput = document.getElementById('methodInput');

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
            form.action = `/asrama/${id}`;
            methodInput.value = 'PUT'; // Tetapkan metode ke PUT
        });
    });

    // Reset form ketika modal ditutup
    document.getElementById('tambahAsramaModal').addEventListener('hidden.bs.modal', function () {
        idInput.value = '';
        namaInput.value = '';
        modalTitle.textContent = 'Tambah Asrama';
        form.action = '{{ route('asrama.store') }}'; // Kembali ke route store
        methodInput.value = ''; // Hapus metode
    });
});
