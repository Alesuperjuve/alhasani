<table class="table table-responsive table-hover no-footer">
  <thead>
    <tr>
      <th>NO</th>
      @foreach ($headers as $header)
      <th>{{ $header }}</th>
                      @endforeach
                      <th>AKSI</th>
                    </tr>
                  </thead>
                  <tbody>
                        @forelse ($rows as $index => $row)
                        <tr>
                          <td>{{ ($rows->currentPage() - 1) * $rows->perPage() + $index + 1 }}</td>
                            @foreach ($headers as $key => $header)
                               <td>

                                @if ($header == 'PENDIDIKAN')
                                    <label class="badge badge-primary">{{$row->$key}}</label>
                                @else
                                  {{ $row->$key }}
                                @endif

                               </td>
                            @endforeach
                          <td>
                            <button class="btn btn-outline-primary">Detail</button>
                          </td>
                        </tr>
                        @empty
                        <tr>
                          <td colspan="{{ count($headers) + 1 }}" class="text-center">
                          Data tidak ditemukan</td>
                        </tr>
                        @endforelse
                      </tbody>
                    </table>