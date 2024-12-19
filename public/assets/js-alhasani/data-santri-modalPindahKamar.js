// jQuery untuk mengirim data santri ke modalPindahKamar di halaman Santri -->

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