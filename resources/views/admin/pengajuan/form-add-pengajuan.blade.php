<!-- Modal Tambah Pengajuan-->

<div style="" class="modal fade" id="modal-add-pengajuan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Tambah Pengajuan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Form tambah Pengajuan -->
        <form method="post" action="" id="form-add-pengajuan">
            @csrf
            <div class="form-group">
                <label for="Nama">NIK :</label><br>
                <select style="width:100%;" name="nik" id="select2nik"></select>
            </div>
            
            <div class="form-group">
                <label for="tempat-pengajuan">Tanggal Pengajuan :</label>
                <input type="date" class="form-control" id="tanggal_pengajuan" name="tanggal_pengajuan">
            </div>
            
            <div class="form-group">
                <label for="jenis_pelayanan">Jenis Pelayanan :</label>
                <select name="jenis_pelayanan" id="jenis_pelayanan" class="form-control">
                    <option selected value="0">Surat Menikah</option>
                    <option value="1">Lainnya</option>
                </select>
            </div>

      </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button id="btn-save-pengajuan" type="button" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
  </div>
</div>