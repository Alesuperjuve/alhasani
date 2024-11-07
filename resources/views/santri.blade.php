<x-app-layout>
    
    <x-dataTabel :rows="$santri" 
    :headers="['nama_santri'    => 'NAMA',
               'alamat'         => 'ALAMAT', 
               'kota'           => 'KOTA',
               'pendidikan'    => 'PENDIDIKAN']" 
    :search="$search" />

    
</x-app-layout>




