<!-- Modal ttd pdf-->

<div style="" class="modal fade" id="modal-ttd-menikah-pdf" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Tanda Tangan Pdf</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Form ttd pdf -->
        <form method="post" action="{{route('pengajuan.cetakpdf')}}" id="form-ttd-menikah-pdf" target="_blank">
            @csrf
            <div class="form-group">
                <input type="hidden" class="form-control" id="id-pdf-menikah" name="id_pdf">
                <label for="Nama">Penanda Tangan :</label><br>
                <select style="width:100%;" name="ttd" id="select2ttdmenikah"></select>
            </div>

            <div class="form-group">
                <label for="Nama">Calon Suami :</label><br>
                <select style="width:100%;" name="niksuami" id="select2niksuami"></select>
            </div>

            <div class="form-group">
                <label for="Nama">Calon Istri :</label><br>
                <select style="width:100%;" name="nikistri" id="select2nikistri"></select>
            </div>

            <div class="form-group">
                <label for="Nama">Ayah :</label><br>
                <select style="width:100%;" name="nikayah" id="select2nikayah"></select>
            </div>

            <div class="form-group">
                <label for="Nama">Ibu :</label><br>
                <select style="width:100%;" name="nikibu" id="select2nikibu"></select>
            </div>
      </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            <button id="btn-cetak-pengajuan" type="submit" class="btn btn-primary">Cetak</button>
        </div>
        </form>
    </div>
  </div>
</div>