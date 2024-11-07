<body>
<div class="container mt-5">
   
    <!-- Formulir Pencarian -->
    <form action="{{ request()->url() }}" method="GET" class="mb-3">
        
        
            <div class="col-8 input-group">
                <input type="text" name="search" class="form-control" placeholder="Cari data..." value="{{ $search }}">
                <button type="submit" class="btn btn-primary">Cari</button>
            </div>
        
    </form>

    <!-- Tabel Responsif -->
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>NO</th>
                    @foreach ($headers as $header)
                        <th>{{ $header }}</th>
                    @endforeach
                    <th> </th>
                </tr>
            </thead>
            <tbody>
                @forelse ($rows as $index => $row)
                    <tr>
                        <td>{{ ($rows->currentPage() - 1) * $rows->perPage() + $index + 1 }}</td>
                        @foreach ($headers as $key => $header)
                            <td>{{ $row->$key }}</td>
                        @endforeach
                        <td>
                            <label href="javascript:;" class="badge badge-primary">Detail</label>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="{{ count($headers) + 1 }}" class="text-center">Data tidak ditemukan</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <div class="d-flex justify-content-center">
        {{ $rows->withQueryString()->links() }}
    </div>
</div>

        



<!-- Javascript Untuk OffCanvas -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const buttons = document.querySelectorAll('.open-offcanvas');

        buttons.forEach(button => {
            button.addEventListener('click', function() {
                const santriId = this.getAttribute('data-id');
                console.log('Santri ID:', santriId); // Pastikan ID yang diambil benar

                // Mengambil data santri melalui AJAX
                fetch(`/santri/${santriId}`)
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Network response was not ok');
                        }
                        return response.json();
                    })
                    .then(data => {
                        console.log('Data santri:', data); // Cek data yang diterima
                        document.getElementById('namaSantri').innerText = data.nama_santri;
                        document.getElementById('alamat').innerText = data.alamat;

                        // Pastikan OffCanvas terbuka setelah data diisi
                        const offcanvasElement = document.getElementById('offcanvasRight');
                        const bsOffcanvas = new bootstrap.Offcanvas(offcanvasElement);
                        bsOffcanvas.show();
                    })
                    .catch(error => console.error('Terjadi kesalahan:', error));
            });
        });
    });
</script>

<script type="text/javascript">function showSantri(url) {
    $.ajax({
        url: url,
        type: 'GET',
    }).done(function (data) {
        $("#content-show-santri").html(data)
    });
    }
</script>

</body>