<x-app-layout>
    <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Profil Pesantren</h4>
                 
                  <div class="row">
                    <div class="col-md-6">
                      <address>
                            <p class="fw-bold">Ponpes {{ $pesantren->nama_pesantren }}</p>
                            <p>{{ $pesantren->alamat_pesantren }}</p>
                            <p>{{ $pesantren->kota }}</p>
                        </address>
                        <address>
                            <p class="fw-bold">Pengasuh</p>
                            <p>{{ $pesantren->pengasuh }}</p>
                        </address>
                        <address>
                            <p class="fw-bold">Penanggung Jawab (Lurah)</p>
                            <p>{{ $pesantren->lurah }}</p>
                        </address>
                    </div>
                    <div class="col-md-6">
                      <address class="text-primary">
                        <p class="fw-bold">
                          E-mail
                        </p>
                        <p class="mb-2">
                          {{ $pesantren->email }}
                        </p>
                        <p class="fw-bold">
                          Web Site
                        </p>
                        <p class="mb-2">
                          {{ $pesantren->web }}
                        </p>
                        <p class="fw-bold">
                          No HP
                        </p>
                        <p>
                          {{ $pesantren->hp_pesantren_1 }}
                        </p>
                        <p class="mb-2">
                          {{ $pesantren->hp_pesantren_2 }}
                        </p>

                        <p class="fw-bold">
                          Instagram 
                        </p>
                        <p class="mb-2">
                          {{ $pesantren->instagram }}
                        </p>
                      </address>
                    </div>
                  </div>
                </div>
               
              </div>
            </div>
    
</x-app-layout>
