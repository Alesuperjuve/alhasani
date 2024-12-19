// jQuery untuk mengirim data santri ke modalSlide di halaman Santri -->

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
