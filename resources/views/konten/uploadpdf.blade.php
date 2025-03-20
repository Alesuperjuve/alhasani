
<body>
    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif
    <form action="{{ route('upload.file') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="pdf_file" required>
        <button type="submit">Upload</button>
    </form>
</body>
</html>
