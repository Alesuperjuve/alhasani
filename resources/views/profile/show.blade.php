<x-app-layout>
    
   <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Informasi Akun (Pengurus)</h4>
                  <table class="table table-responsive table-hover">
                    <thead class="table-light">
                        <tr>
                            <th class="text-center">NO</th>
                            <th>NIK</th>
                            <th>NAMA </th>
                            <th>EMAIL</th>
                            <th>KOTA</th>
                            <th>POSISI</th>
                            <th class="text-center">LEVEL</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($users as $user)
                            <tr>
                                <td class="text-center">{{ $user->no_urut }}</td>
                                <td>{{ $user->nik }}</td>
                                <td>{{ ucwords($user->name) }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->kota }}</td>
                                <td>{{ $user->posisi }}</td>
                                <td class="text-center">{{ $user->level }}</td>
                            </tr>
                    @endforeach
                    </tbody>
            </table>
                </div>
               
              </div>
            </div>
    
   
</x-app-layout>