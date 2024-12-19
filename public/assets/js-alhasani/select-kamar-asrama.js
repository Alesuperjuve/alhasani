// Mengisi dropdown pilih asrama dan pilih kamar secara dinamis 
    document.addEventListener('DOMContentLoaded', function () {
    const asramaDropdown = document.getElementById('pilih-asrama'); // Dropdown Asrama
    const kamarDropdown = document.getElementById('pilih-kamar');   // Dropdown Kamar
    const idKamarInput = document.getElementById('id_kamar'); // Input tersembunyi untuk id_kamar

    // Ambil data kamarList dari server melalui Blade
    //const kamarList = @json($kamarList);
    const kamarList = window.kamarList;

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
