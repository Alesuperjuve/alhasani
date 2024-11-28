<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Data Kamar Berdasarkan Asrama') }}
        </h2>
    </x-slot>

    <div class="container mt-4">
        <x-nav-pills :asramas="$asramas" />
    </div>
</x-app-layout>
