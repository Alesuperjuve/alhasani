<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Santri</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Data Santri</h1>
        
        <!-- Formulir Pencarian -->
        <form action="{{ route('santri.index') }}" method="GET" class="mb-3">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Cari santri..." value="{{ request('search') }}">
                <button type="submit" class="btn btn-primary">Cari</button>
            </div>
        </form>

        <!-- Tabel Responsif -->
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>NAMA</th>
                        <th>ALAMAT</th>
                        <th><a href="#">KOTA ASAL</a></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($santri as $index => $s)
                        <tr>
                            <td>{{ ($santri->currentPage() - 1) * $santri->perPage() + $index + 1 }}</td>
                            <td>{{ $s->nama_santri }}</td>
                            <td>{{ $s->alamat }}</td>
                            <td>{{ $s->kota }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center">Data tidak ditemukan</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="d-flex justify-content-center">
            {{ $santri->withQueryString()->links() }}
        </div>
    </div>
</body>
</html>