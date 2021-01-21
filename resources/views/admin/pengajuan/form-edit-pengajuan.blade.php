<!-- Modal Edit Pengajuan-->

<div style="" class="modal fade" id="modal-edit-pengajuan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Edit Pengajuan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Form Edit Pengajuan -->
        <form method="post" action="" id="form-edit-pengajuan">
            @csrf
            <div class="form-group">
                <input type="hidden" class="form-control" id="id-pengajuan" name="id">
                <label for="Nama">NIK :</label><br>
                <!-- <select style="width:100%;" name="nik" id="select2nik"></select> -->
                <input type="text" class="form-control" id="nik-edit" name="nik" readonly>
            </div>
            
            <div class="form-group">
                <label for="tempat-pengajuan">Tanggal Pengajuan :</label>
                <input type="date" class="form-control" id="tanggal_pengajuan_edit" name="tanggal_pengajuan">
            </div>
            
            <div class="form-group">
                <label for="jenis_pelayanan">Jenis Pelayanan :</label>
                @if(Auth::user()->role == 2 or Auth::user()->role == 3 or Auth::user()->role == 4)
                  <input type="text" class="form-control" id="jenis-pelayanan-edit" name="jenis_pelayanan" readonly>
                @else
                  <select name="jenis_pelayanan" id="jenis-pelayanan-edit" class="form-control" required>
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
                @endif
            </div>

      </div>
            <div class="modal-footer">
                @if(Auth::user()->role == 2 or Auth::user()->role == 3 or Auth::user()->role == 4)
                  <button id="btn-approve-pengajuan" type="button" class="btn btn-success">Approve</button>
                  <button id="btn-tolak-pengajuan" type="button" class="btn btn-warning">Tolak</button>
                @endif
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                @if(Auth::user()->role == 1 or Auth::user()->role == 0)
                  <button id="btn-ubah-pengajuan" type="button" class="btn btn-primary">Ubah</button>
                @endif
            </div>
        </form>
    </div>
  </div>
</div>