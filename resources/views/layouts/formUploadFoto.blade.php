<form action="{{ route('santri.update') }}" method="POST" enctype="multipart/form-data" class="container mt-4">
  @csrf
  <input type="hidden" name="hidden_id" id="hidden_id" value="">
  <div class="mb-3">
    <p>ID SANTRI : <span id="modalIdSantri"></span> </p>
    <label for="foto" class="form-label"><strong>Foto</strong></label>
    <input class="form-control" type="file" id="foto" name="foto" accept="image/*" required>
  </div>
  <div class="mb-3">
    <label for="ktp" class="form-label"><strong>KTP</strong></label>
    <input class="form-control" type="file" id="ktp" name="ktp" accept="image/*" required>
  </div>
  <div class="mb-3">
    <label for="kk" class="form-label"><strong>Kartu Keluarga</strong></label>
    <input class="form-control" type="file" id="kk" name="kk" accept="image/*" required>
  </div>
  <div class="mb-3">
    <label for="ijazah" class="form-label"><strong>Ijazah</strong></label>
    <input class="form-control" type="file" id="ijazah" name="ijazah" accept="image/*" required>
  </div>
  <button type="submit" class="btn btn-primary">Upload</button>
</form>
