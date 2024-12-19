@vite(['resources/css/app.css', 'resources/js/app.js'])

@foreach($scripts as $script)
    <script src="{{ $script }}"></script>
@endforeach