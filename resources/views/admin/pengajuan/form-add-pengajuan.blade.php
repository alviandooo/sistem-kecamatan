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
                    <option selected >-- Pilih --</option>
                    <option value="1">Surat keterangan Nikah</option>
                    <option value="2">Surat Keterangan Tidak Mampu</option>
                    <option value="3">Surat Keterangan Tidak Memiliki Rumah</option>
                    <option value="4">Surat Menikah</option>
                    <option value="5">Surat Kematian</option>
                    <option value="6">Surat Keterangan Usaha</option>
                    <option value="7">Surat KPR Rumah</option>
                    <option value="8">Surat Izin Bangunan</option>
                    <option value="9">Surat Pengantar SKCK</option>
                    <option value="10">Surat Keramaian</option>
                    <option value="0">Lainnya</option>
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