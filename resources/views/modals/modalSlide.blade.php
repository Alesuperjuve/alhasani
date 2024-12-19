<div class="modal fade" id="modalSlide" tabindex="-1" aria-labelledby="formLabel" aria-hidden="true">
  <div class="modal-dialog">
    
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h3 class="modal-title text-white" id="modalNamaSantri"></h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <div class="modal-body">
        <div class="row">
          <ul class="nav nav-pills nav-justified mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
              <a class="nav-link active" id="pills-foto-tab" 
                 data-bs-toggle="pill" data-bs-target="#pills-foto" 
                 type="button" role="tab" 
                 aria-controls="pills-foto" aria-selected="true">Foto dan Dokumen
              </a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link" id="pills-upload-tab" 
                 data-bs-toggle="pill" data-bs-target="#pills-upload" 
                 type="button" role="tab" 
                 aria-controls="pills-upload" aria-selected="false">Upload Foto
              </a>
            </li>
          </ul>  
          <div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-foto" 
    role="tabpanel" aria-labelledby="pills-foto-tab">
     @include('layouts/carouselFotoDokumen')
  </div>
  <div class="tab-pane fade" id="pills-upload" 
    role="tabpanel" aria-labelledby="pills-upload-tab">
    @include('layouts/formUploadFoto')
  </div>
</div>
        </div>
        



</div>
      <div class="modal-footer bg-primary">
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Tutup</button>
      
      </div>
    </div>
  
  </div>
</div>