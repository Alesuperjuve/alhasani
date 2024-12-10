<x-app-layout>
    <div class="container mt-5">
        <h5 class="mb-4">{{ __("Cetak semua data dalam bentuk PDF") }}</h5>
        
        <x-list-pdf :listPDF="$listPDF" :headers="['NO', 'NAMA', 'LINK','KET']"/>


    </div>
</x-app-layout>
