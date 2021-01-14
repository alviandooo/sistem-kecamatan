<!-- Modal Edit Data-->

<div style="" class="modal fade" id="modal-edit-data" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Edit Data Penduduk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Form Edit Data -->
        <form method="post" action="" id="form-edit-data">
            @csrf
            <div class="form-group">
                <input type="hidden" id="id-nik-edit" name="id">
                <label for="Nama">NIK :</label>
                <input type="text" class="form-control" readonly id="nik-edit" name="nik" aria-describedby="nama" placeholder="NIK">
            </div>
            <div class="form-group">
                <label for="kk">No. Kartu Keluarga :</label>
                <input type="text" class="form-control" id="kk-edit" name="no_kk" placeholder="No. Kartu Keluarga">
            </div>
            <div class="form-group">
                <label for="Nama">Nama Lengkap :</label>
                <input type="text" class="form-control" id="nama-edit" name="nama" placeholder="Nama Lengkap">
            </div>
            <div class="form-group">
                <label for="tempat-lahir">Tempal Lahir :</label>
                <input type="text" class="form-control" id="tempat_lahir_edit" name="tempat_lahir" placeholder="Tempal Lahir">
            </div>
            <div class="form-group">
                <label for="tempat-lahir">Tanggal Lahir :</label>
                <input type="date" class="form-control" id="tanggal_lahir_edit" name="tanggal_lahir">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat :</label>
                <textarea name="alamat" id="alamat-edit" cols="30" class="form-control" rows="3"></textarea>
            </div>
            
            <div class="form-group">
                <label for="Status">Status :</label>
                <select name="status" id="status-edit" class="form-control">
                    <option selected value="1">Menikah</option>
                    <option value="0">Belum Menikah</option>
                </select>
            </div>

            <div class="form-group">
                <label for="Status">Agama :</label>
                <select name="agama" id="agama-edit" class="form-control">
                    <option selected value="4">Budha</option>
                    <option selected value="3">Hindu</option>
                    <option selected value="2">Kristen</option>
                    <option value="1">Islam</option>
                    <option value="0">Lainnya</option>
                </select>
            </div>
            
      </div>
            <div class="modal-footer">
                <button type="button" id="btn-delete-data" class="btn btn-danger">Hapus</button>
                <button id="btn-update-data" type="button" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
  </div>
</div>