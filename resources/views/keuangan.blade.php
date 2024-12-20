<x-app-layout>
    
    <div class="container">
        <!-- Tabs Navigation -->
        <ul class="nav nav-pills nav-pills-custom" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="inisiasi-tab" data-bs-toggle="tab" data-bs-target="#inisiasi" type="button" role="tab" aria-controls="inisiasi" aria-selected="true">
                    INISIASI
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pembayaran-tab" data-bs-toggle="tab" data-bs-target="#pembayaran" type="button" role="tab" aria-controls="pembayaran" aria-selected="false">
                    PEMBAYARAN
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="item-bayar-tab" data-bs-toggle="tab" data-bs-target="#item-bayar" type="button" role="tab" aria-controls="item-bayar" aria-selected="false">
                    ITEM BAYAR
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="arus-kas-tab" data-bs-toggle="tab" data-bs-target="#arus-kas" type="button" role="tab" aria-controls="arus-kas" aria-selected="false">
                    ARUS KAS
                </button>
            </li>
        </ul>

        <!-- Tabs Content -->
        <div class="tab-content mt-3" id="myTabContent">
            <div class="tab-pane fade show active" id="inisiasi" role="tabpanel" aria-labelledby="inisiasi-tab">
                <h4>INISIASI</h4>
                <p>Konten untuk tab INISIASI.</p>
            </div>
            <div class="tab-pane fade" id="pembayaran" role="tabpanel" aria-labelledby="pembayaran-tab">
                <h4>PEMBAYARAN</h4>
                <div class="row ms-2 me-2">
                                        <div class="card-body mb-4">
                                         <div class="row">
                                              <div class="row col-4 pt-3">
                                                <img src="assets/foto/santri/picture-005.jpg" class="img-fluid">
                                              </div>
                                              <div class="row col-8">
                                                <div class="card-body px-0 pt-0 pb-2 ps-3">
                                                  <div class="form-group">
                                                      <label for="exampleFormControlSelect2">Pilih Santri yang hendak membayar</label>
                                                      
                                                      <select multiple="" class="form-control" id="exampleFormControlSelect2">
                                                        <option>Alessandro Del Piero</option>
                                                        <option>David Trezeguet</option>
                                                        <option>Pavel Nedved</option>
                                                        <option>Gianluigi Buffon</option>
                                                        <option>Zinedine Zidane</option>
                                                      </select>
                                                  </div>
                                                  
                                                </div>
                                              </div>
                                            </div>
                                          
                                        </div>
                                      </div>
            </div>
            <div class="tab-pane fade" id="item-bayar" role="tabpanel" aria-labelledby="item-bayar-tab">
                <h4>ITEM BAYAR</h4>
                <p>Konten untuk tab ITEM BAYAR.</p>
            </div>
            <div class="tab-pane fade" id="arus-kas" role="tabpanel" aria-labelledby="arus-kas-tab">
                <h4>ARUS KAS</h4>
                <p>Konten untuk tab ARUS KAS.</p>
            </div>
        </div>
    </div>
</x-app-layout>
