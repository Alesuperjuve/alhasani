// JavaScript untuk menentukan apakah modal berfungsi untuk CREATE atau UPDATE data -->


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
            form.action = this.dataset.url;
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