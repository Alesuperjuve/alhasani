<x-app-layout>
    
   

    <x-dataTabel :rows="$kamarList" 
    :headers="['nama_kamar'    => 'NAMA KAMAR',
               'kapasitas'     => 'KAPASITAS', 
               'nama_asrama'     => 'ASRAMA']" 
    :search="$search" />
</x-app-layout>
