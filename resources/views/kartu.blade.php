<x-app-layout>
    
    <h5>{{ __("Cetak Kartu Santri") }}</h5>
    <ul class="nav nav-pills mb-1" id="tab-kartu" role="tablist">
      <li class="nav-item" role="presentation">
         <a class="nav-link active" id="kartudepan-tab" data-bs-toggle="tab" href="#kartudepan" role="tab" aria-controls="kartudepan" aria-selected="true">Tampak Depan</a>
      </li>
      <li class="nav-item" role="presentation">
         <a class="nav-link" id="kartubelakang-tab" data-bs-toggle="tab" href="#kartubelakang" role="tab" aria-controls="kartubelakang" aria-selected="false">Tampak Belakang</a>
      </li>
    </ul>

     <div class="tab-content" id="kontenKartu">
         <div class="tab-pane fade show active" id="kartudepan" role="tabpanel" aria-labelledby="kartudepan-tab">
            <div class="card" style="width: 50%;">
              <img src="assets/kartu/kartu-depan.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text">Kartu Santri PP Al-Hasani (Tampak Depan)</p>
              </div>
            </div>
    </div>

    <div class="tab-pane fade" id="kartubelakang" role="tabpanel" aria-labelledby="kartubelakang-tab">
        <div class="card" style="width: 50%;">
              <img src="assets/kartu/kartu-belakang.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text">Kartu Santri PP Al-Hasani (Tampak Depan)</p>
              </div>
            </div>
    </div>
     </div>
    
  
</div>
   
</x-app-layout>
