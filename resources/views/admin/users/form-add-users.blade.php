<!-- Modal Tambah Users-->

<div style="margin-top:5%;" class="modal fade" id="modal-add-users" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Tambah User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Form tambah users -->
        <form method="post" action="" id="form-add-users">
            @csrf
            <div class="form-group">
                <label for="Nama">Nama :</label>
                <input type="text" class="form-control" id="nama" name="nama" aria-describedby="nama" placeholder="Nama">
            </div>
            <div class="form-group">
                <label for="Email">Email :</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="Password">Password :</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="Jabatan">Jabatan :</label>
                <select name="jabatan" id="jabatan" class="form-control">
                    <option value="4">Lurah</option>
                    <option value="3">Sekretaris Lurah</option>
                    <option value="2">Kasi</option>
                    <option value="1">Operator</option>
                    <option value="0">Admin</option>
                </select>
            </div>
            
      </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button id="btn-save-users" type="button" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
  </div>
</div>