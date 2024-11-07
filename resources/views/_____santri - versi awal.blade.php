<!-- santri.blade versi awal -->

    <x-dataTabel :rows="$santri" 
    :headers="['nama_santri'    => 'NAMA', 
               'jenis_kelamin'  => 'GENDER',
               'alamat'         => 'ALAMAT', 
               'kota'           => 'KOTA']" 
    :search="$search" />

    
    <!-- Panggil offcanvas -->
    @include('components/offcanvas')