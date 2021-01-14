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
                <input type="hidden" class="form-control" id="id-pengajuan" name="id_pengajuan">
                <label for="Nama">NIK :</label><br>
                <!-- <select style="width:100%;" name="nik" id="select2nik"></select> -->
                <input type="text" class="form-control" id="nik-edit" name="nik_edit" readonly>
            </div>
            
            <div class="form-group">
                <label for="tempat-pengajuan">Tanggal Pengajuan :</label>
                <input type="date" class="form-control" id="tanggal_pengajuan_edit" name="tanggal_pengajuan_edit">
            </div>
            
            <div class="form-group">
                <label for="jenis_pelayanan">Jenis Pelayanan :</label>
                @if(Auth::user()->role == 2 or Auth::user()->role == 3)
                  <input type="text" class="form-control" id="jenis-pelayanan-edit" name="jenis_pelayanan_edit" readonly>
                @else
                  <select name="jenis_pelayanan_edit" id="jenis-pelayanan-edit" class="form-control">
                    <option selected value="0">Surat Menikah</option>
                    <option value="1">Lainnya</option>
                </select>
                @endif
            </div>

      </div>
            <div class="modal-footer">
                @if(Auth::user()->role == 2 or Auth::user()->role == 3)
                  <button id="btn-approve-pengajuan" type="button" class="btn btn-primary">Approve</button>
                  <button id="btn-tolak-pengajuan" type="button" class="btn btn-primary">Tolak</button>
                @endif
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                @if(Auth::user()->role == 1)
                  <button id="btn-ubah-pengajuan" type="button" class="btn btn-primary">Simpan</button>
                @endif
            </div>
        </form>
    </div>
  </div>
</div>