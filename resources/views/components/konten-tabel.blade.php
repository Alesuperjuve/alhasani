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
                            <!-- Button Detail Profil -->
                            <button 
                                class="btn btn-outline-dark btn-detail" 
                                data-id="{{ $row->id_santri }}" 
                                data-bs-toggle="offcanvas" 
                                data-bs-target="#offcanvasRight"
                                title="Detail Profil">
                                <i class="mdi mdi-alphabetical"></i>
                            </button>

                            <!-- Button Dokumen -->
                            <button 
                                class="btn btn-outline-dark btn-detail btn-dokumen" 
                                data-id="{{ $row->id_santri }}" 
                                data-nik="{{ $row->nik }}"
                                data-nama="{{ $row->nama_santri }}"
                                data-foto="{{ $row->foto ? 'assets/foto/santri/' . $row->foto : 'assets/foto/santri/default-foto.png' }}"
                                data-ktp="{{ $row->ktp ? 'assets/foto/ktp/' . $row->ktp : 'assets/foto/ktp/default-ktp.jpg' }}"
                                data-kk="{{ $row->kk ? 'assets/foto/kk/' . $row->kk : 'assets/foto/kk/default-kk.jpg' }}"
                                data-ijazah="{{ $row->ijazah ? 'assets/foto/ijazah/' . $row->ijazah : 'assets/foto/ijazah/default-ijazah.jpg' }}"
                                data-bs-toggle="modal" 
                                data-bs-target="#modalSlide"
                                title="Dokumen">
                                <i class="mdi mdi-account-box-outline"></i>
                            </button>

                        @elseif ($key == 'nama_kamar' && $viewType === 'SANTRI')
                            <!-- Badge Nama Kamar -->
                            <a href="#" 
                                class="kirim-sankam"
                                data-bs-toggle="modal" 
                                data-bs-target="#modalPindahKamar"
                                data-id="{{ $row->id_santri }}"
                                data-nama="{{ $row->nama_santri }}"
                                data-kamar="{{ $row->id_kamar }}"
                                data-nik="{{ $row->nik }}"
                                data-foto="{{ $row->foto ? 'assets/foto/santri/' . $row->foto : 'assets/foto/santri/default-foto.png' }}"
                                title="Pindah Kamar">
                                <div class="badge badge-primary">{{ $row->kamar->nama_kamar ?? '---' }}</div>
                            </a>
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