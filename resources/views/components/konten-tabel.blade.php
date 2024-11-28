<table class="table table-responsive table-striped table-hover no-footer">
    <thead>
        <tr>
            <th>NO</th>
            @foreach ($headers as $header)
                <th>{{ $header }}</th>
            @endforeach
        </tr>
    </thead>
    <tbody>
        @forelse ($rows as $index => $row)
            <tr>
                <td>{{ ($rows->currentPage() - 1) * $rows->perPage() + $index + 1 }}</td>
                @foreach ($headers as $key => $header)
                    <td>
                        @if ($key === 'detail' && $viewType === 'SANTRI')
                            <button 
                                    class="btn btn-outline-dark btn-detail" 
                                    data-id="{{ $row->id_santri }}" 
                                    data-bs-toggle="offcanvas" 
                                    data-bs-target="#offcanvasRight"
                                    data-bs-toggle="tooltip" 
                                    title="Detail Profil">
                                    <i class="mdi mdi-alphabetical"></i>
                            </button>

                            <button 
                                class="btn btn-outline-dark btn-detail" 
                                data-id="{{ $row->id_santri }}" 
                                data-bs-toggle="offcanvas" 
                                data-bs-target="#offcanvasRight"
                                data-bs-toggle="tooltip" 
                                title="Dokumen">
                                <i class="mdi mdi-account-box-outline"></i>
                            </button>
                        @elseif ($key == 'nama_kamar' && $viewType === 'SANTRI')
                            {{ $row->kamar->nama_kamar ?? '-' }}
                        @else
                            {{ $row->$key }}
                        @endif
                    </td>
                @endforeach
            </tr>
        @empty
            <tr>
                <td colspan="{{ count($headers) + 2 }}" class="text-center">Data tidak ditemukan</td>
            </tr>
        @endforelse
    </tbody>
</table>
