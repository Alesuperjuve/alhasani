<!-- JS untuk menampilkan detail santri di OffCanvas Right -->
    
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
