<!-- Modal Tambah Data-->

<div style="" class="modal fade bd-example-modal-lg" id="modal-add-data" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Tambah Data Penduduk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Form tambah Data -->
        <form method="post" class="form" action="" id="form-add-data">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama" id="nama" >
                </div>
                <div class="form-group col-md-6">
                    <label for="nik">NIK</label>
                    <input type="text" class="form-control" name="nik" id="nik" >
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="tempat lahir">Tempat Lahir</label>
                    <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" >
                </div>
                <div class="form-group col-md-6">
                    <label for="tanggal_lahir">Tanggal Lahir</label>
                    <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <select id="jenis_kelamin" name="jenis_kelamin" class="form-control">
                        <option selected>--Pilih--</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="Kewarganegaraan">Kewarganegaraan</label>
                    <input type="text" class="form-control" name="kewarganegaraan" id="kewarganegaraan" >
                </div>
            </div>
            
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="agama">Agama</label>
                    <select id="agama" name="agama" class="form-control">
                        <option selected>--Pilih--</option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Budha">Budha</option>
                        <option value="Konghucu">Konghucu</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="pekerjaan">Pekerjaan</label>
                    <input type="text" class="form-control" name="pekerjaan" id="pekerjaan" >
                </div>
            </div>

            <div class="form-group">
                <label for="alamat">Alamat :</label>
                <textarea name="alamat" id="alamat" cols="30" class="form-control" rows="3"></textarea>
            </div>
            
      </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button id="btn-save-data" type="button" class="btn btn-primary">Simpan</button>
    </div>
        </form>
    </div>
  </div>
</div>