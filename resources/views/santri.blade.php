<x-app-layout>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    
    <x-dataTabel :rows="$santri" 
    :headers="['nama_santri'    => 'NAMA',
               'alamat'         => 'ALAMAT', 
               'kota'           => 'KOTA',
               'nama_kamar'    => 'KAMAR',
               'detail'    => 'DETAIL']" 
    :search="$search" />

    
</x-app-layout>




