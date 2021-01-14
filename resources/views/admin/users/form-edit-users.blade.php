<!-- Modal Edit Users-->

<div style="margin-top:5%;" class="modal fade" id="modal-edit-users" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Edit User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Form Edit users -->
        <form method="" action="" id="form-edit-users">
            @csrf
            <input type="hidden" id="id-users" name="id">
            <div class="form-group">
                <label for="Nama">Nama :</label>
                <input type="text" class="form-control" id="edit-nama" name="nama" aria-describedby="nama" placeholder="Nama">
            </div>
            <div class="form-group">
                <label for="Email">Email :</label>
                <input type="email" class="form-control" id="edit-email" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="Password">Password :</label>
                <input type="password" class="form-control" id="edit-password" name="password" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="Jabatan">Jabatan :</label>
                <select name="jabatan" id="edit-jabatan" class="form-control">
                    <option value="3">Kepala Camat</option>
                    <option value="2">Sekretaris Camat</option>
                    <option value="1">Staff Administrasi</option>
                    <option value="0">Admin</option>
                </select>
            </div>
            
      </div>
            <div class="modal-footer">
                <button id="btn-hapus-users" type="button" class="btn btn-danger" >Hapus</button>
                <button id="btn-update-users" type="button" class="btn btn-primary">Ubah</button>
            </div>
        </form>
    </div>
  </div>
</div>