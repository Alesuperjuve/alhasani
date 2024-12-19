<div class="modal fade modal-xl" id="modalEditPondok" tabindex="-1" aria-labelledby="modalEditPondokLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-white" id="modalEditPondokLabel">Edit Data Pondok</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                    <div class="row">
                        <div class="col-6">
                            <x-input-label for="namaPondok" :value="__('Nama Pondok')" />
                            <input type="text" class="form-control" id="namaPondok" name="namaPondok" required placeholder="Al-Hasani">
                        </div>
                        <div class="col-3">
                            <x-input-label for="pengasuh" :value="__('Nama Pengasuh')" />
                            <input type="text" class="form-control" id="pengasuh" name="pengasuh" placeholder="KH Mutashim Billah" required>
                        </div>  
                        <div class="col-3">
                            <x-input-label for="lurahPondok" :value="__('Lurah Pondok (PJ)')" />
                            <input type="text" class="form-control" id="lurahPondok" name="lurahPondok" placeholder="Muhammad Zaidun" required>
                        </div>  
                    </div>

                    <div class="row">
                        <div class="col-8">
                            <x-input-label for="alamatPondok" :value="__('Alamat')" />
                            <textarea 
                                                class="form-control" 
                                                id="alamatPondok" 
                                                name="alamatPondok" 
                                                rows="3" >
                                        </textarea required>
                        </div>
                        <div class="col-4">
                            <x-input-label for="website" :value="__('Web Site')" />
                            <input type="text" class="form-control" id="website" name="website" placeholder="www.alhasani.com" required>
                        </div>    
                    </div>  

                    <div class="row">
                        <div class="col-3">
                            <x-input-label for="emailPondok" :value="__('Email')" />
                            <input type="text" class="form-control" id="emailPondok" name="emailPondok" placeholder="alhasani@gmail.com" required>
                        </div>
                        <div class="col-3">
                            <x-input-label for="hpPondokSatu" :value="__('No HP 1')" />
                            <input type="text" class="form-control" id="hpPondokSatu" name="hpPondokSatu" placeholder="081234567890" required>
                        </div>
                        <div class="col-3">
                            <x-input-label for="hpPondokDua" :value="__('No HP 2')" />
                            <input type="text" class="form-control" id="hpPondokDua" name="hpPondokDua" placeholder="08987654321" required>
                        </div>
                        <div class="col-3">
                            <x-input-label for="igPondok" :value="__('Instagram')" />
                            <input type="text" class="form-control" id="igPondok" name="igPondok" placeholder="@hitamputih" required>
                        </div>    
                    </div>   
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
