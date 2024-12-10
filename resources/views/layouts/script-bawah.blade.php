

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
    const offcanvasElement  = document.getElementById('offcanvasRight');
    const offcanvasBody     = offcanvasElement.querySelector('.offcanvas-body');
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
                        <p class="fw-bold">NISN</p>
                        <p>${data.nisn || '-'}</p>
                        <p>REGISTER ${data.tanggal_masuk_pondok || '-'}</p>
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
            <p></p>
           
        `;
    });
});

</script>

<!-- jQuery untuk mengirim data santri ke modalSlide di halaman Santri -->
<script type="text/javascript">
    $(document).ready(function() {
        $('.btn-dokumen').on('click', function() {
            const idSantri = $(this).data('id');
            const nikSantri = $(this).data('nik');
            const namaSantri = $(this).data('nama');
            const fotoSantri = $(this).data('foto');
            const ktpSantri = $(this).data('ktp');
            const kkSantri = $(this).data('kk');
            const ijazahSantri = $(this).data('ijazah');

            // Gabungkan NIK dan Nama menjadi satu string
            const niknama = nikSantri + ' ' + namaSantri;

            // Isi elemen di modal dengan data
            $('#hidden_id').val(idSantri);
            $('#modalIdSantri').text(idSantri);
            $('#modalNamaSantri').text(niknama);

            // Ubah src untuk setiap gambar
            $('#foto').attr('src', fotoSantri);
            $('#ktpImg').attr('src', ktpSantri);
            $('#kkImg').attr('src', kkSantri);
            $('#ijazahImg').attr('src', ijazahSantri);
        });
    });
</script>


<!-- jQuery untuk mengirim data santri ke modalPindahKamar di halaman Santri -->
<script type="text/javascript">
    // Mengisi data untuk modal
    $(document).ready(function() {
        $('.kirim-sankam').on('click', function() {
            const idSanKam = $(this).data('id');
            const namaSanKam = $(this).data('nama');
            const fotoSanKam = $(this).data('foto');
            const nikSanKam = $(this).data('nik');
            const kamarSanKam = $(this).data('kamar');

            // Lakukan AJAX request untuk mendapatkan data santri
            fetch(`/santri/${idSanKam}`)
                .then(response => response.json())
                .then(data => {
                    // Update konten kamar
                    $('#kamar-sankam').html(`
                        <address>
                            <p><strong>Kamar saat ini</strong><p>
                            <p>Kamar ${data.kamar?.nama_kamar || '-'} 
                            <span class="text-primary">(Asrama ${data.kamar?.asrama?.nama_asrama || '-'})</span></p>

                        </address>
                    `);
                })
                .catch(error => console.error('Error:', error));

            const headMO    = 'Kamar untuk ' + namaSanKam;
            const nikMO     = 'NIK ' + nikSanKam;
            
            // Isi elemen di modal dengan data
            $('#coba').text(idSanKam);
            $('#idsantri-sankam').val(idSanKam);
            $('#nama-sankam').text(headMO);
            $('#nik-sankam').text(nikMO);
            

            // Ubah src untuk foto
            $('#foto-sankam').attr('src', fotoSanKam);
        });
    });
</script>



<!-- Mengisi dropdown pilih asrama dan pilih kamar secara dinamis -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
    const asramaDropdown = document.getElementById('pilih-asrama'); // Dropdown Asrama
    const kamarDropdown = document.getElementById('pilih-kamar');   // Dropdown Kamar
    const idKamarInput = document.getElementById('id_kamar'); // Input tersembunyi untuk id_kamar

    // Ambil data kamarList dari server melalui Blade
    const kamarList = @json($kamarList);

    // Tampilkan hasil filteredRooms di console browser
    //console.log('kamarList:', kamarList);

    // Event listener untuk perubahan pilihan di "Pilih Asrama"
    asramaDropdown.addEventListener('change', function () {
        const selectedAsramaId = asramaDropdown.value; // ID asrama yang dipilih

        // Kosongkan dropdown kamar terlebih dahulu
        kamarDropdown.innerHTML = '<option selected disabled>Pilih Kamar</option>';

        // Ambil data kamar berdasarkan asrama ID dengan fetch
        fetch(`/get-rooms/${selectedAsramaId}`)
            .then(response => response.json()) // Parse response JSON
            .then(data => {
                // Intersect antara hasil fetch dan kamarList
                const filteredRooms = data.filter(room => 
                    kamarList.some(kamar => kamar.id_kamar === room.id_kamar)
                );

                // Tampilkan hasil filteredRooms di console browser
                console.log('Filtered Rooms:', filteredRooms);

                // Tambahkan opsi kamar hasil intersect ke dropdown
                filteredRooms.forEach(room => {
                    const option = document.createElement('option');
                    option.value = room.id_kamar; // Value opsi kamar
                    option.textContent = room.nama_kamar; // Nama kamar
                    kamarDropdown.appendChild(option); // Tambahkan ke dropdown
                });

                // Jika tidak ada kamar tersedia setelah intersect
                if (filteredRooms.length === 0) {
                    const noOption = document.createElement('option');
                    noOption.disabled = true;
                    noOption.textContent = 'Tidak ada kamar tersedia';
                    kamarDropdown.appendChild(noOption);
                }
            })
            .catch(error => console.error('Error fetching rooms:', error));
    });

    // Event listener untuk perubahan pilihan di "Pilih Kamar"
    kamarDropdown.addEventListener('change', function () {
        // Set id_kamar pada input tersembunyi
        idKamarInput.value = kamarDropdown.value;
    });
});

</script>





