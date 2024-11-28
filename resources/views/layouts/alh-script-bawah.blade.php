<!-- plugins:js -->
    <script src="assets/staradmin/dist/assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="assets/staradmin/dist/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/staradmin/dist/assets/vendors/chart.js/chart.umd.js"></script>
    <script src="assets/staradmin/dist/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/staradmin/dist/assets/js/off-canvas.js"></script>
    <script src="assets/staradmin/dist/assets/js/template.js"></script>
    <script src="assets/staradmin/dist/assets/js/settings.js"></script>
    <script src="assets/staradmin/dist/assets/js/hoverable-collapse.js"></script>
    <script src="assets/staradmin/dist/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="assets/staradmin/dist/assets/js/jquery.cookie.js" type="text/javascript"></script>
    <script src="assets/staradmin/dist/assets/js/dashboard.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- <script src="assets/js/Chart.roundedBarCharts.js"></script> -->
    <!-- End custom js for this page-->

    <script>
    document.addEventListener('DOMContentLoaded', function() {
    const offcanvasElement = document.getElementById('offcanvasRight');
    const offcanvasBody = offcanvasElement.querySelector('.offcanvas-body');
    const namaSantriElement = document.getElementById('namaSantri');

    // Tombol Detail
    const detailButtons = document.querySelectorAll('.btn-detail');
    detailButtons.forEach(button => {
        button.addEventListener('click', function() {
            const santriId = this.getAttribute('data-id');
            
            // Lakukan AJAX request untuk mendapatkan data santri
            fetch(`/santri/${santriId}`)
                .then(response => response.json())
                .then(data => {
                    // Update konten dalam offcanvas
                    namaSantriElement.textContent = data.nama_santri || '-';
                    offcanvasBody.innerHTML = `
                        <div class="text-center">
                                <img src="assets/foto/santri/${data.foto}" class="img-fluid" alt="..." style="max-width:45%">
                        </div>

                        <p> NIS ${data.nis || '-'} - ${data.tanggal_masuk_pondok || '-'}</p>
                        <h2 class="text-uppercase">${data.nama_santri || '-'}</h2>
                        <address>
                        <p>${data.alamat || '-'}</p>
                        <p>${data.kota || '-'}</p>
                        </address>

                        <address>
                        <p class="fw-bold">NIK</p>
                        <p>${data.nik || '-'}</p>
                        </address>

                        <address>
                        <p class="fw-bold">Lahir</p>
                        <p>${data.tempat_lahir || '-'}, ${data.tanggal_lahir || '-'} </p>
                        </address>

                        <address>
                        <p class="fw-bold">Jenis Kelamin</p>
                        <p>${data.jenis_kelamin || '-'}</p>
                        </address>

                        <address>
                        <p class="fw-bold">Kamar</p>
                        <p>${data.kamar?.nama_kamar || '-'} (Asrama ${data.kamar?.asrama?.nama_asrama || '-'})</p>
                        </address>

                        <address>
                        <p class="fw-bold">Pendidikan</p>
                        <p>${data.pendidikan || '-'}</p>
                        </address>

                        <address>
                        <p class="fw-bold">Orang Tua/Wali</p>
                        <p> AYAH ${data.nama_ayah || '-'} - HP ${data.hp_ayah || '-'} </p>
                        <p> IBU ${data.nama_ibu || '-'} - HP ${data.hp_ibu || '-'} </p>
                        <p> WALI ${data.nama_wali || '-'} - HP ${data.hp_wali || '-'} </p>
                        </address>
                    `;
                })
                .catch(error => console.error('Error:', error));
        });
    });

    // Reset konten saat Offcanvas ditutup
    offcanvasElement.addEventListener('hidden.bs.offcanvas', function() {
        namaSantriElement.textContent = '-';
        offcanvasBody.innerHTML = `
            <p><strong>Nama:</strong> </p>
            <p><strong>Alamat:</strong> </p>
            <p><strong>Kota:</strong> </p>
            <p><strong>Kamar:</strong> </p>
            <p><strong>Asrama:</strong> </p>
        `;
    });
});

</script>
